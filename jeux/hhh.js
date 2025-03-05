const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");

// Adapter la taille du canvas à l'écran
function resizeCanvas() {
    let size = Math.min(window.innerWidth, window.innerHeight) * 0.9;
    size = Math.floor(size / 20) * 20; // Arrondir à un multiple de 20
    canvas.width = size;
    canvas.height = size;
}
resizeCanvas();
window.addEventListener("resize", resizeCanvas);

// Taille des cases (proportionnelle au canvas)
let box = canvas.width / 20;

// Position et direction initiale du serpent
let snake = [{ x: 10 * box, y: 10 * box }];
let direction = "RIGHT";

// Position du ballon (nourriture)
let food = {
    x: Math.floor(Math.random() * (canvas.width / box)) * box,
    y: Math.floor(Math.random() * (canvas.height / box)) * box,
};

// Score
let score = 0;

// Contrôle clavier
document.addEventListener("keydown", changeDirection);

// Contrôle tactile (boutons)
document.getElementById("left").addEventListener("click", () => setDirection("LEFT"));
document.getElementById("up").addEventListener("click", () => setDirection("UP"));
document.getElementById("right").addEventListener("click", () => setDirection("RIGHT"));
document.getElementById("down").addEventListener("click", () => setDirection("DOWN"));

function setDirection(newDir) {
    if ((newDir === "LEFT" && direction !== "RIGHT") ||
        (newDir === "RIGHT" && direction !== "LEFT") ||
        (newDir === "UP" && direction !== "DOWN") ||
        (newDir === "DOWN" && direction !== "UP")) {
        direction = newDir;
    }
}

function changeDirection(event) {
    if (event.keyCode === 37) setDirection("LEFT");
    else if (event.keyCode === 38) setDirection("UP");
    else if (event.keyCode === 39) setDirection("RIGHT");
    else if (event.keyCode === 40) setDirection("DOWN");
}

// Vérifier la collision
function collision(newHead, snake) {
    return snake.some(segment => segment.x === newHead.x && segment.y === newHead.y);
}

// Mettre à jour le jeu
function update() {
    let head = { ...snake[0] };

    if (direction === "LEFT") head.x -= box;
    if (direction === "RIGHT") head.x += box;
    if (direction === "UP") head.y -= box;
    if (direction === "DOWN") head.y += box;

    if (head.x < 0 || head.x >= canvas.width || head.y < 0 || head.y >= canvas.height || collision(head, snake)) {
        clearInterval(game);
        alert("Game Over ! Score : " + score);
        return;
    }

    snake.unshift(head);

    if (head.x === food.x && head.y === food.y) {
        score++;
        food = {
            x: Math.floor(Math.random() * (canvas.width / box)) * box,
            y: Math.floor(Math.random() * (canvas.height / box)) * box,
        };
    } else {
        snake.pop();
    }

    draw();
}

// Dessiner le jeu
function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    snake.forEach((segment, index) => {
        ctx.fillStyle = index === 0 ? "green" : "darkgreen";
        ctx.fillRect(segment.x, segment.y, box, box);
        ctx.strokeStyle = "black";
        ctx.strokeRect(segment.x, segment.y, box, box);
    });

    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.arc(food.x + box / 2, food.y + box / 2, box / 2, 0, Math.PI * 2);
    ctx.fill();
}

// Lancer le jeu
let game = setInterval(update, 150);
