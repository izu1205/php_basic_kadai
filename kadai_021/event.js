const btn = document.getElementById('btn');
const text = document.getElementById('text');


btn.addEventListener('click', function () {

  setTimeout(function(){
    text.textContent = "ボタンをクリックしました";
  }, 2000);
});

