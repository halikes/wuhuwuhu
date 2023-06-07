// 创建画布
const canvas = document.getElementById("gameCanvas");
const context = canvas.getContext("2d");

// 定义蛇的初始位置和速度
let snakeX = 10;
let snakeY = 10;
let snakeSize = 20;
let dx = 0;
let dy = 0;

// 定义食物的位置
let foodX = Math.floor(Math.random() * canvas.width / snakeSize) * snakeSize;
let foodY = Math.floor(Math.random() * canvas.height / snakeSize) * snakeSize;

// 定义蛇的身体
let snakeBody = [];
let snakeLength = 1;

// 监听键盘事件
document.addEventListener("keydown", changeDirection);

function changeDirection(event) {
  const keyPressed = event.keyCode;
  const goingUp = dy === -snakeSize;
  const goingDown = dy === snakeSize;
  const goingLeft = dx === -snakeSize;
  const goingRight = dx === snakeSize;

  if (keyPressed === 37 && !goingRight) { // 左箭头键
    dx = -snakeSize;
    dy = 0;
  }

  if (keyPressed === 38 && !goingDown) { // 上箭头键
    dx = 0;
    dy = -snakeSize;
  }

  if (keyPressed === 39 && !goingLeft) { // 右箭头键
    dx = snakeSize;
    dy = 0;
  }

  if (keyPressed === 40 && !goingUp) { // 下箭头键
    dx = 0;
    dy = snakeSize;
  }
}

// 更新游戏状态
function update() {
  snakeX += dx;
  snakeY += dy;

  // 碰撞检测
  if (snakeX < 0 || snakeY < 0 || snakeX >= canvas.width || snakeY >= canvas.height) {
    gameOver();
    return;
  }

  // 绘制背景
  context.fillStyle = "#000";
  context.fillRect(0, 0, canvas.width, canvas.height);

  // 绘制食物
  context.fillStyle = "#f00";
  context.fillRect(foodX, foodY, snakeSize, snakeSize);

  // 绘制蛇的身体
  snakeBody.unshift({ x: snakeX, y: snakeY });
  if (snakeBody.length > snakeLength) {
    snakeBody.pop();
  }

  context.fillStyle = "#0f0";
  snakeBody.forEach(bodyPart => {
    context.fillRect(bodyPart.x, bodyPart.y, snakeSize, snakeSize);

    // 碰撞检测（吃到食物）
    if (bodyPart.x === foodX && bodyPart.y === foodY) {
      snakeLength++;
      foodX = Math.floor(Math.random() * canvas.width / snakeSize) * snakeSize;
      foodY = Math.floor(Math.random() * canvas.height / snakeSize) * snakeSize;
    }

    // 碰撞检测（咬到自己）
    if (bodyPart.x === snakeX && bodyPart.y === snakeY && snakeBody.length > 1) {
      gameOver();
    }
  });

  // 更新游戏状态
  setTimeout(update, 100);
}

// 游戏结束
function gameOver() {
  alert("游戏结束");
  snakeX = 10;
  snakeY = 10;
  snakeLength = 1;
  snakeBody = [];
  dx = 0;
  dy = 0;
}

// 启动游戏
update();
