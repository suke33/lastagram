window.addEventListener('DOMContentLoaded', ()=>{
  [].forEach.call(document.querySelectorAll('.fa-heart'),x=>{
    x.addEventListener('click',()=>{
      if(x.classList.contains('far')){
        x.classList.replace('far','fas');
      }else{
        x.classList.replace('fas','far');
      }
    });
  });
});

