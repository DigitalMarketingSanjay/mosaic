<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    margin: 0;
    padding: 0;
    overflow: hidden;
  }
  .container {
    position: relative;
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .div {
    width: 100px;
    height: 100px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    transition: transform 0.5s;
  }
  .div1 { background-color: #ff6347; }
  .div2 { background-color: #66cc66; }
  .div3 { background-color: #4169e1; }
</style>
</head>
<body>
<div class="container">
  <div class="div div1"></div>
  <div class="div div2"></div>
  <div class="div div3"></div>
</div>
<script>
  const divs = document.querySelectorAll('.div');

  function scrollHandler() {
    const scrollPosition = window.scrollY;

    const startPosition = 0;
    const endPosition = 600;

    if (scrollPosition >= startPosition && scrollPosition <= endPosition) {
      const progress = (scrollPosition - startPosition) / (endPosition - startPosition);

      divs[0].style.transform = `translateX(${150 * progress}px) translateY(-50%)`;
      divs[1].style.transform = `translateX(-${150 * progress}px) translateY(-50%)`;
      divs[2].style.transform = `translateX(${150 * progress}px) translateY(-50%)`;
    } else {
      divs.forEach(div => {
        div.style.transform = 'translateY(-50%)';
      });
    }
  }

  window.addEventListener('scroll', scrollHandler);
</script>
</body>
</html>
