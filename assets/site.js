(()=>{
const $=(s,r=document)=>r.querySelector(s),$$=(s,r=document)=>[...r.querySelectorAll(s)];
const reduce=matchMedia('(prefers-reduced-motion: reduce)').matches;

/* the two big wordmarks fill the frame exactly, whatever font arrives */
function fit(){$$('.fit').forEach(el=>{el.style.fontSize='';const w=el.parentElement.clientWidth-parseFloat(getComputedStyle(el.parentElement).paddingLeft)*2;const r=document.createRange();r.selectNodeContents(el.firstChild);const sw=r.getBoundingClientRect().width;const fs=parseFloat(getComputedStyle(el).fontSize);if(sw)el.style.fontSize=Math.min(fs*w*.97/sw,260)+'px'})}
fit();addEventListener('resize',fit);document.fonts&&document.fonts.ready.then(fit);

/* nav */
const nav=$('.nav'),mb=$('.menu-btn');
if(mb)mb.addEventListener('click',()=>{const o=nav.classList.toggle('open');mb.setAttribute('aria-expanded',o);mb.textContent=o?'Close':'Menu'});
let lastY=scrollY;addEventListener('scroll',()=>{const y=scrollY;if(!nav.classList.contains('open'))nav.classList.toggle('hide',y>lastY&&y>400);lastY=y},{passive:true});

/* the wipe: clears a hazed picture left to right, like a squeegee pass */
function wipe(el,dur=1300){
  if(reduce){el.style.setProperty('--w','100%');el.style.setProperty('--done',1);return}
  el.style.setProperty('--done',0);const t0=performance.now();
  const ease=t=>t<.5?4*t*t*t:1-Math.pow(-2*t+2,3)/2;
  (function f(t){const k=Math.min(1,(t-t0)/dur);el.style.setProperty('--w',(ease(k)*100).toFixed(2)+'%');if(k<1)requestAnimationFrame(f);else el.style.setProperty('--done',1)})(t0);
}
const wio=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){wio.unobserve(e.target);wipe(e.target,+e.target.dataset.dur||1300)}}),{threshold:.35});
$$('.wipe[data-wipe]').forEach(w=>{if(!reduce)w.style.setProperty('--w','0%');wio.observe(w)});

/* services picker: choose a service, the picture wipes to it, the button books it */
const frame=$('.picker .frame'),book=$('.book-pick');
$$('.svc button').forEach(b=>b.addEventListener('click',()=>{
  if(b.getAttribute('aria-pressed')==='true')return;
  $$('.svc button').forEach(x=>x.setAttribute('aria-pressed',x===b));
  if(book){book.href='process_booking.php?service='+b.dataset.key;$('span',book).textContent='Book '+b.dataset.name}
  if(frame&&getComputedStyle(frame).display!=='none'){
    const haze=$('.haze',frame),clean=$('.clean',frame),cap=$('figcaption',frame);
    haze.src=clean.src;clean.src=b.dataset.img;clean.alt=b.dataset.name;cap.textContent=b.dataset.name;
    clean.decode().catch(()=>{}).then(()=>wipe(frame,900));
  }
}));

/* booking: the picture follows the chosen service */
const sel=$('#service'),bw=$('.split .wipe');
const PICS={carwash:'wash',interior_exterior:'steam',carwax:'polish',ceramic_coating:'ceramic',ppf:'ppf'};
if(sel&&bw)sel.addEventListener('change',()=>{const h=$('.haze',bw),c=$('.clean',bw);h.src=c.src;c.src=`assets/img/${PICS[sel.value]}.webp`;c.alt=sel.options[sel.selectedIndex].text;c.decode().catch(()=>{}).then(()=>wipe(bw,900))});

/* gallery arrows */
const strip=$('.strip');
$$('.gal-ctl button').forEach(b=>b.addEventListener('click',()=>{const w=$('figure',strip).offsetWidth+16;strip.scrollBy({left:(b.dataset.dir==='next'?1:-1)*w,behavior:reduce?'auto':'smooth'})}));

/* entrances: heading, then text, then picture */
const rio=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');rio.unobserve(e.target)}}),{rootMargin:'0px 0px -10% 0px'});
$$('.rise').forEach(el=>rio.observe(el));

/* hero: the picture drifts slower than the page */
const hs=$('.hero .shot');
if(hs&&!reduce)addEventListener('scroll',()=>{const y=scrollY;if(y<innerHeight)$$('img',hs).forEach(i=>i.style.translate=`0 ${(y*.25).toFixed(1)}px`)},{passive:true});
})();
