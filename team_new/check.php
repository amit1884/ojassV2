<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/gh/cant89/gianni-accordion-js/dist/gianniAccordion.min.js"></script>
    <style>
    [data-accordion-element-content] {
  height: auto;
  overflow: hidden;
  transition: height 0.5s;
}
* {
  box-sizing: border-box;
}
body {
  background: #eee;
  overflow: scroll;
}
.card {
  width: 400px;
  margin: 50px auto;
  border-radius: 2px;
  background: white;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
}
article {
  position: relative;
  font-family: 'Roboto', sans-serif;
  transition: all 0.3s;
  background: #E8EAF6;
}
article.selected {
  transform: scale(1.1);
  box-shadow: 0 0 5px rgba(2, 2, 2, 0.4);
  z-index: 2;
}
h1 {
  position: relative;
  background: #3F51B5;
  padding: 20px 30px;
  font-size: 20px;
  line-height: 30px;
  color: #fff;
  overflow: hidden;
  transition: background 0.3s;
}
h1:hover, .selected h1 {
  cursor: pointer;
  background: #3949AB;
}
h1:before, h1:after {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: -1px;
  margin-right: 30px;
  width: 20px;
  height: 2px;
  background: #fff;
  transition: transform 0.3s;
}
h1:before {
  transform: rotate(0deg);
  animation: close-line-one-in 0.8s forwards;
}
.selected h1:before {
  animation: close-line-one-out 0.8s forwards;
}
h1:after {
  transform: rotate(90deg);
  animation: close-line-two-in 0.8s forwards;
}
.selected h1:after {
  animation: close-line-two-out 0.8s forwards;
}
.content {
  opacity: 0;
  transform: translateY(20px);
  transition: all ease-out 0.4s 0.1s;
}
.selected .content {
  transform: translateY(0);
  opacity: 1;
}
.collapsed .content {
  display: none;
}
p {
  padding: 25px 30px 40px;
  background: #E8EAF6;
  font-size: 16px;
  line-height: 24px;
  color: #000;
}
@keyframes close-line-one-out {
  0%, 50% {
    transform: translateX(0);
  }
  75% {
    transform: translateX(50px);
  }
  76% {
    transform: translateX(50px) translateY(50px);
  }
  100% {
    transform: rotate(45deg);
  }
}
@keyframes close-line-one-in {
  0%, 20% {
    transform: rotate(45deg);
  }
  60% {
    transform: translateX(50px) translateY(50px) rotate(45deg);
  }
  61% {
    transform: translateX(50px);
  }
  100% {
    transform: rotate(0deg);
  }
}
@keyframes close-line-two-out {
  0%, 50% {
    transform: rotate(90deg);
  }
  75% {
    transform: translateY(-50px) rotate(90deg);
  }
  76% {
    transform: translateY(-50px) translateX(50px) rotate(90deg);
  }
  100% {
    transform: rotate(135deg);
  }
}
@keyframes close-line-two-in {
  0% {
    transform: rotate(135deg);
  }
  50% {
    transform: translateY(-50px) translateX(50px) rotate(135deg);
  }
  51% {
    transform: translateY(-50px) rotate(90deg);
  }
  100% {
    transform: rotate(90deg);
  }
}

    </style>
</head>
<body>
<section class="card">
  <article>
    <h1 data-accordion-element-trigger>Lorem ipsum</h1>
    <div data-accordion-element-content class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lectus quis mauris malesuada fringilla. Praesent non tellus massa. Phasellus at neque et massa elementum sodales. Quisque neque enim, dignissim at molestie quis, lobortis eu elit. Sed ornare ultrices tortor sed mollis. Pellentesque blandit quam imperdiet lorem lobortis, at pharetra massa condimentum. Maecenas ac nibh mi. Donec suscipit dolor vitae faucibus venenatis.</p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>Lorem ipsum</h1>
    <div data-accordion-element-content class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lectus quis mauris malesuada fringilla. Praesent non tellus massa. Phasellus at neque et massa elementum sodales. Quisque neque enim, dignissim at molestie quis, lobortis eu elit. </p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>Lorem ipsum</h1>
    <div data-accordion-element-content class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lectus quis mauris malesuada fringilla. Praesent non tellus massa. Phasellus at neque et massa elementum sodales. Quisque neque enim, dignissim at molestie quis, lobortis eu elit. Sed ornare ultrices tortor sed mollis. Pellentesque blandit quam imperdiet lorem lobortis, at pharetra massa condimentum. Maecenas ac nibh mi. Donec suscipit dolor vitae faucibus venenatis.</p>
    </div>
  </article>
  <article>
    <h1 data-accordion-element-trigger>Lorem ipsum</h1>
    <div data-accordion-element-content class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu lectus quis mauris malesuada fringilla. Praesent non tellus massa. Phasellus at neque et massa elementum sodales. Quisque neque enim, dignissim at molestie quis, lobortis eu elit. Sed ornare ultrices tortor sed mollis. Pellentesque blandit quam imperdiet lorem lobortis, at pharetra massa condimentum. Maecenas ac nibh mi. Donec suscipit dolor vitae faucibus venenatis.<br />Praesent non tellus massa. Phasellus at neque et massa elementum sodales. Quisque neque enim, dignissim at molestie quis, lobortis eu elit. Sed ornare ultrices tortor sed mollis. Pellentesque blandit quam imperdiet lorem lobortis, at pharetra massa condimentum. Maecenas ac nibh mi. Donec suscipit dolor vitae faucibus venenatis.</p>
    </div>
  </article>
</section>
</body>
</html>

<script>
/**
>>>>>>>

Wanna include in your project?

More documentation on github:

https://github.com/cant89/gianni-accordion-js

>>>>>>>
**/

var myAccordion = new gianniAccordion({
  elements: ".card article",
          trigger: "[data-accordion-element-trigger]",
        content: "[data-accordion-element-content]",
});

myAccordion.on("elementSelected", (data)=>{
  console.log("elementOpened", data);
});
</script>