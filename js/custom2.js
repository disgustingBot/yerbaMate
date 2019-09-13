d=document;w=window;c=console;elementos=[];
Array.prototype.remove=function(){var what,a=arguments,L=a.length,ax;while(L&&this.length){what=a[--L];while((ax=this.indexOf(what))!==-1){this.splice(ax,1)}}return this;};

function onScroll(){ c.log("s");
  elementos.forEach(e => {
    let newY=w.scrollY-e.dataset.originalT;
    e.style.setProperty('--y', `${newY}px`);
  });
}


let observer = new IntersectionObserver(function(entries, observer){
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      elementos.unshift(entry.target);
      w.addEventListener('scroll',onScroll,{capture:false,passive:true})
    }else{elementos.remove(entry.target);}
  })
  if(elementos.length==0){w.removeEventListener('scroll',onScroll,{capture:false,passive:true})}
}, {threshold:0.01});

d.querySelectorAll('.parallax').forEach(e=>{e.dataset.originalT=Math.floor(e.getBoundingClientRect().y+w.scrollY)})
d.querySelectorAll('.parallax').forEach(e=>{e.style.setProperty('transform', `translateY(calc(var(--y) * ${e.dataset.parallax}))`)})
d.querySelectorAll('.parallax').forEach(e=>{observer.observe(e)})


// https://medium.com/@filipvitas/beautiful-parallax-2019-edition-907846ff81e0
