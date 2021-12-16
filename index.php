


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bravo 3leek</title>
  <meta name="description" content="Bravo 3leeeeeeeeeeeeeeeeeeek">
  <meta name="author" content="SitePoint">
<style>
  body {
    background-color: gray;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding-top: 200px;
  }
  .question {
    color: white;
    font-size: 180%;
  }
  .btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
}
.bravo {
  position: fixed;
  top: 0;
  
}
.image {
  position: fixed;
  object-fit: cover;
  width: 100%;
  height: 100%;
  top: 0;
  opacity: 80%;
  z-index: -1;
}
.hide {
  display: none !important;
}
.btn:hover {opacity: 1}
@media (max-width: 768px) {
  body {
    padding-top: 130px;
  }
  .textfield {
    width: 80%;
  }
}
.textfield {
border: none; 
color: #f4511e;
width: 200px;
height: 100px; 
padding: 10px;
font-size: 20px;
overflow: hidden;
border-radius: 10px;
opacity: 80%;
}
.mylable {
  font-size: 120%;
  color: white;
  margin-top: 10px;
}
.dev{
  position: fixed;
  bottom: 10px;
  color: white;
}
</style>
</head>

<body>
  <div class="question">ايه الانجاز اللي عملته النهاردة ؟</div><br><br>
  <input placeholder="....." type="text" class='textfield'></input>
  <br>
  <button class='btn'>Submit</button>
  <div class="dev">Developed By: <em>GENIO</em></div>
  <div class="hide mylable">اكتب يسطا متخمش</div>
  <video src="/video.mp4" controls class='hide bravo'></video>
  <script>
    const bravo = document.querySelector('.bravo');
    document.querySelector('.btn').addEventListener('click', ()=>{
      if (document.querySelector('input').value == '') {
        document.querySelector('.mylable').classList.remove('hide');
      }
      else 
        {
          document.querySelector('.mylable').classList.add('hide');
          document.querySelector('input').value = '';
          bravo.classList.remove('hide');
          bravo.currentTime = 0;
          bravo.play();
        }
    })
    bravo.addEventListener('ended', ()=>{
      bravo.classList.add('hide');
    })
    bravo.addEventListener('pause', ()=>{
      bravo.classList.add('hide');
    })
  </script>
  
</body>
</html>
