window.addEventListener('DOMContentLoaded', () => { // Структура страницы загружена и готова к взаимодействию

    const count = new CountUp( // задаем необходимые параметры
      'num1', // 1. задаём идентификатор элемента с числом
      0, // 2. задаём начальное число
      250, // 3. задаём конечное число
      0, // 4. задаём количество цифр после запятой
      8 // 5. задаём продолжительность анимации в секундах
    );
    count.start() // запускаем настроенную анимацию
    const count1 = new CountUp( // задаем необходимые параметры
    'num2', // 1. задаём идентификатор элемента с числом
    0, // 2. задаём начальное число
    550, // 3. задаём конечное число
    0, // 4. задаём количество цифр после запятой
    8 // 5. задаём продолжительность анимации в секундах
  );
  count1.start() // запускаем настроенную анимацию
  const count2 = new CountUp( // задаем необходимые параметры
      'num3', // 1. задаём идентификатор элемента с числом
      0, // 2. задаём начальное число
      4.8, // 3. задаём конечное число
      1, // 4. задаём количество цифр после запятой
      8 // 5. задаём продолжительность анимации в секундах
    );
    count2.start() // запускаем настроенную анимацию
  })

  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".header_nav");
  const myBody = document.body.innerHTML;


  hamburger.addEventListener("click", () => {
    document.body.classList.toggle("active");
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    
  })