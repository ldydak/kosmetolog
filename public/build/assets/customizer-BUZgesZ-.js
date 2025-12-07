(()=>{const e=o=>localStorage.getItem(o),c=(o,a)=>{localStorage.setItem(o,a)},t="ar-",m=document.getElementById("customizer-styles"),b=document.getElementById("custom-generated-styles"),O=`
      
    :root {
      
      ${e("theme-primary")&&`--${t}primary: ${e("theme-primary")};`}
      
      ${e("theme-primary-rgb")&&`--${t}primary-rgb: ${e("theme-primary-rgb")};`}
      
      ${e("theme-warning")&&`--${t}warning-rgb: ${e("theme-warning")};`}
      
      ${e("theme-warning-rgb")&&`--${t}warning-rgb: ${e("theme-warning-rgb")};`}
      
      ${e("theme-info")&&`--${t}info-rgb: ${e("theme-info")};`}
      
      ${e("theme-info-rgb")&&`--${t}info-rgb: ${e("theme-info-rgb")};`}
      
      ${e("theme-success")&&`--${t}success-rgb: ${e("success-info")};`}
      
      ${e("theme-success-rgb")&&`--${t}success-rgb: ${e("success-info-rgb")};`}
      
      ${e("theme-danger")&&`--${t}danger-rgb: ${e("danger-info")};`}
      
      ${e("theme-danger-rgb")&&`--${t}danger-rgb: ${e("danger-info-rgb")};`}
      
      ${e("theme-font-family")&&`--${t}body-font-family: ${e("theme-font-family")};`}
      
      ${e("theme-root-font-size")&&`--${t}root-font-size: ${e("theme-root-font-size")};`}
      
      ${e("theme-body-font-size")&&`--${t}body-font-size: ${e("theme-body-font-size")};`}
      
      ${e("theme-border-width")&&`--${t}border-width: ${e("theme-border-width")};`}
      
      ${e("theme-border-radius")&&`--${t}border-radius: ${e("theme-border-radius")};`}
      
      ${e("theme-border-radius-sm")&&`--${t}border-radius-sm: ${e("theme-border-radius-sm")};`}
      
      ${e("theme-border-radius-lg")&&`--${t}border-radius-lg: ${e("theme-border-radius-lg")};`}
      
      ${e("theme-border-radius-xl")&&`--${t}border-radius-xl: ${e("theme-border-radius-xl")};`}
      
      ${e("theme-border-radius-xxl")&&`--${t}border-radius-xxl: ${e("theme-border-radius-xxl")};`}
      
      ${e("theme-primary")&&`--${t}link-color: ${e("theme-primary")};`}
      
      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--${t}link-hover-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}
      
    }
      
    .btn-primary {
      
      ${e("theme-primary")&&`--${t}btn-bg: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-border-color: ${e("theme-primary")};`}
      
      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--${t}btn-hover-bg: ${e("theme-primary-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--${t}btn-hover-border-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--${t}btn-active-bg: ${e("theme-primary-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-primary-btn-hover-active-border-bg-color")&&`--${t}btn-active-border-color: ${e("theme-primary-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-primary")&&`--${t}btn-disabled-bg: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-disabled-border-color: ${e("theme-primary")};`}
      
    }
      
    .btn-warning {
      
      ${e("theme-warning")&&`--${t}btn-bg: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-border-color: ${e("theme-warning")};`}
      
      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--${t}btn-hover-bg: ${e("theme-warning-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--${t}btn-hover-border-color: ${e("theme-warning-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--${t}btn-active-bg: ${e("theme-warning-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-warning-btn-hover-active-border-bg-color")&&`--${t}btn-active-border-color: ${e("theme-warning-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-warning")&&`--${t}btn-disabled-bg: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-disabled-border-color: ${e("theme-warning")};`}
      
    }
      
    .btn-info {
      
      ${e("theme-info")&&`--${t}btn-bg: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-border-color: ${e("theme-info")};`}
      
      ${e("theme-info-btn-hover-active-border-bg-color")&&`--${t}btn-hover-bg: ${e("theme-info-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-info-btn-hover-active-border-bg-color")&&`--${t}btn-hover-border-color: ${e("theme-info-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-info-btn-hover-active-border-bg-color")&&`--${t}btn-active-bg: ${e("theme-info-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-info-btn-hover-active-border-bg-color")&&`--${t}btn-active-border-color: ${e("theme-info-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-info")&&`--${t}btn-disabled-bg: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-disabled-border-color: ${e("theme-info")};`}
      
    }
      
    .btn-success {
      
      ${e("theme-success")&&`--${t}btn-bg: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-border-color: ${e("theme-success")};`}
      
      ${e("theme-success-btn-hover-active-border-bg-color")&&`--${t}btn-hover-bg: ${e("theme-success-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-success-btn-hover-active-border-bg-color")&&`--${t}btn-hover-border-color: ${e("theme-success-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-success-btn-hover-active-border-bg-color")&&`--${t}btn-active-bg: ${e("theme-success-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-success-btn-hover-active-border-bg-color")&&`--${t}btn-active-border-color: ${e("theme-success-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-success")&&`--${t}btn-disabled-bg: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-disabled-border-color: ${e("theme-success")};`}
      
    }
      
    .btn-danger {
      
      ${e("theme-danger")&&`--${t}btn-bg: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-border-color: ${e("theme-danger")};`}
      
      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--${t}btn-hover-bg: ${e("theme-danger-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--${t}btn-hover-border-color: ${e("theme-danger-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--${t}btn-active-bg: ${e("theme-danger-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-danger-btn-hover-active-border-bg-color")&&`--${t}btn-active-border-color: ${e("theme-danger-btn-hover-active-border-bg-color")};`}
      
      ${e("theme-danger")&&`--${t}btn-disabled-bg: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-disabled-border-color: ${e("theme-danger")};`}
      
    }
      
    .btn-outline-primary {
      
      ${e("theme-primary")&&`--${t}btn-color: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-border-color: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-hover-bg: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-hover-border-color: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-active-bg: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-active-border-color: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-disabled-color: ${e("theme-primary")};`}
      
      ${e("theme-primary")&&`--${t}btn-disabled-border-color: ${e("theme-primary")};`}
      
    }
      
    .btn-outline-warning {
      
      ${e("theme-warning")&&`--${t}btn-color: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-border-color: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-hover-bg: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-hover-border-color: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-active-bg: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-active-border-color: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-disabled-color: ${e("theme-warning")};`}
      
      ${e("theme-warning")&&`--${t}btn-disabled-border-color: ${e("theme-warning")};`}
      
    }
      
    .btn-outline-info {
      
      ${e("theme-info")&&`--${t}btn-color: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-border-color: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-hover-bg: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-hover-border-color: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-active-bg: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-active-border-color: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-disabled-color: ${e("theme-info")};`}
      
      ${e("theme-info")&&`--${t}btn-disabled-border-color: ${e("theme-info")};`}
      
    }
      
    .btn-outline-success {
      
      ${e("theme-success")&&`--${t}btn-color: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-border-color: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-hover-bg: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-hover-border-color: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-active-bg: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-active-border-color: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-disabled-color: ${e("theme-success")};`}
      
      ${e("theme-success")&&`--${t}btn-disabled-border-color: ${e("theme-success")};`}
      
    }
      
    .btn-outline-danger {
      
      ${e("theme-danger")&&`--${t}btn-color: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-border-color: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-hover-bg: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-hover-border-color: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-active-bg: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-active-border-color: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-disabled-color: ${e("theme-danger")};`}
      
      ${e("theme-danger")&&`--${t}btn-disabled-border-color: ${e("theme-danger")};`}
      
    }
      
    .accordion-button:not(.collapsed)::after {
      
      ${e("theme-accordion-btn-active-icon")&&`--${t}accordion-btn-active-icon: ${e("theme-accordion-btn-active-icon")}`}
      
    }
      
  `;let f=O;f=O.replace(/null|\s*(?![A-Z])/g,""),m.append(f),f.split("}").map(o=>{o.indexOf("{--")!==-1&&b.append(o+"}")});const r={root:m.sheet.cssRules[0],primaryBtn:m.sheet.cssRules[1],warningBtn:m.sheet.cssRules[2],infoBtn:m.sheet.cssRules[3],successBtn:m.sheet.cssRules[4],dangerBtn:m.sheet.cssRules[5],primaryOutlineBtn:m.sheet.cssRules[6],warningOutlineBtn:m.sheet.cssRules[7],infoOutlineBtn:m.sheet.cssRules[8],successOutlineBtn:m.sheet.cssRules[9],dangerOutlineBtn:m.sheet.cssRules[10],accordion:m.sheet.cssRules[11]},g=()=>{b.innerHTML=r.root.cssText.replace(/null|\s*(?![A-Z])/g,""),b.innerHTML+=r.primaryBtn.cssText.indexOf("{ }")===-1?r.primaryBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.warningBtn.cssText.indexOf("{ }")===-1?r.warningBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.infoBtn.cssText.indexOf("{ }")===-1?r.infoBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.successBtn.cssText.indexOf("{ }")===-1?r.successBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.dangerBtn.cssText.indexOf("{ }")===-1?r.dangerBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.primaryOutlineBtn.cssText.indexOf("{ }")===-1?r.primaryOutlineBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.warningOutlineBtn.cssText.indexOf("{ }")===-1?r.warningOutlineBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.infoOutlineBtn.cssText.indexOf("{ }")===-1?r.infoOutlineBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.successOutlineBtn.cssText.indexOf("{ }")===-1?r.successOutlineBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.dangerOutlineBtn.cssText.indexOf("{ }")===-1?r.dangerOutlineBtn.cssText.replace(/ /g,""):"",b.innerHTML+=r.accordion.cssText.indexOf("{ }")===-1?r.accordion.cssText.replace(/ /g,""):""},y=o=>{var a=0,l=0,h=0;return o.length==4?(a="0x"+o[1]+o[1],l="0x"+o[2]+o[2],h="0x"+o[3]+o[3]):o.length==7&&(a="0x"+o[1]+o[2],l="0x"+o[3]+o[4],h="0x"+o[5]+o[6]),+a+","+ +l+","+ +h},d=(o,a)=>{var l=parseInt(o.replace("#",""),16),h=Math.round(2.55*a),i=(l>>16)+h,u=(l>>8&255)+h,s=(255&l)+h;return"#"+(16777216+65536*(i<255?i<1?0:i:255)+256*(u<255?u<1?0:u:255)+(s<255?s<1?0:s:255)).toString(16).slice(1)},$=document.querySelectorAll("#theme-colors .color-swatch");for(let o=0;o<$.length;o++){const a=$[o].querySelector("label"),l=$[o].querySelector('input[type="color"]'),h=$[o].querySelector('input[type="text"]');h.value=e($[o].id)||h.value,l.value=e($[o].id)||l.value,a.style.backgroundColor=e($[o].id)||l.value,l.addEventListener("input",i=>{const u=i.target.parentElement.querySelector("label"),s=i.target.parentElement.querySelector('input[type="text"]'),n=i.target.value;c(" -"+i.target.id,n),c("theme-"+i.target.id+"-rgb",y(n)),c("theme-"+i.target.id+"-btn-hover-active-border-bg-color",d(n,-10)),u.style.backgroundColor=n,s.value=n,r.root.style.setProperty("--"+t+i.target.id,n),r.root.style.setProperty("--"+t+i.target.id+"-rgb",y(n)),r[i.target.id+"Btn"].style.setProperty("--ar-btn-bg",n),r[i.target.id+"Btn"].style.setProperty("--ar-btn-border-color",n),r[i.target.id+"Btn"].style.setProperty("--ar-btn-hover-bg",d(n,-10)),r[i.target.id+"Btn"].style.setProperty("--ar-btn-hover-border-color",d(n,-10)),r[i.target.id+"Btn"].style.setProperty("--ar-btn-active-bg",d(n,-10)),r[i.target.id+"Btn"].style.setProperty("--ar-btn-active-border-color",d(n,-10)),r[i.target.id+"Btn"].style.setProperty("--ar-btn-disabled-bg",n),r[i.target.id+"Btn"].style.setProperty("--ar-btn-disabled-border-color",n),r[i.target.id+"OutlineBtn"].style.setProperty("--ar-btn-color",n),r[i.target.id+"OutlineBtn"].style.setProperty("--ar-btn-border-color",n),r[i.target.id+"OutlineBtn"].style.setProperty("--ar-btn-hover-bg",n),r[i.target.id+"OutlineBtn"].style.setProperty("--ar-btn-hover-border-color",n),r[i.target.id+"OutlineBtn"].style.setProperty("--ar-btn-active-bg",n),r[i.target.id+"OutlineBtn"].style.setProperty("--ar-btn-active-border-color",n),r[i.target.id+"OutlineBtn"].style.setProperty("--ar-btn-disabled-color",n),r[i.target.id+"OutlineBtn"].style.setProperty("--ar-btn-disabled-border-color",n),i.target.id==="primary"&&(c("theme-link-hover-color",d(n,-10)),c("theme-accordion-btn-active-icon",`url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='${n.replace(/#/g,"%23")}'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")`),r.root.style.setProperty("--ar-link-color",n),r.root.style.setProperty("--ar-link-hover-color",d(n,-10)),r.accordion.style.setProperty("--ar-accordion-btn-active-icon",`url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='${n.replace(/#/g,"%23")}'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")`)),g()}),h.addEventListener("change",i=>{const u=i.target.parentElement.querySelector("label"),s=i.target.parentElement.querySelector('input[type="color"]'),n=i.target.value;n.length!=0&&n.startsWith("#")&&(c("theme-"+s.id,n),c("theme-"+s.id+"-rgb",y(n)),c("theme-"+s.id+"-btn-hover-active-border-bg-color",d(n,-10)),u.style.backgroundColor=n,s.value=n,r.root.style.setProperty("--"+t+s.id,n),r.root.style.setProperty("--"+t+s.id+"-rgb",y(n)),r[s.id+"Btn"].style.setProperty("--ar-btn-bg",n),r[s.id+"Btn"].style.setProperty("--ar-btn-border-color",n),r[s.id+"Btn"].style.setProperty("--ar-btn-hover-bg",d(n,-10)),r[s.id+"Btn"].style.setProperty("--ar-btn-hover-border-color",d(n,-10)),r[s.id+"Btn"].style.setProperty("--ar-btn-active-bg",d(n,-10)),r[s.id+"Btn"].style.setProperty("--ar-btn-active-border-color",d(n,-10)),r[s.id+"Btn"].style.setProperty("--ar-btn-disabled-bg",n),r[s.id+"Btn"].style.setProperty("--ar-btn-disabled-border-color",n),r[s.id+"OutlineBtn"].style.setProperty("--ar-btn-color",n),r[s.id+"OutlineBtn"].style.setProperty("--ar-btn-border-color",n),r[s.id+"OutlineBtn"].style.setProperty("--ar-btn-hover-bg",n),r[s.id+"OutlineBtn"].style.setProperty("--ar-btn-hover-border-color",n),r[s.id+"OutlineBtn"].style.setProperty("--ar-btn-active-bg",n),r[s.id+"OutlineBtn"].style.setProperty("--ar-btn-active-border-color",n),r[s.id+"OutlineBtn"].style.setProperty("--ar-btn-disabled-color",n),r[s.id+"OutlineBtn"].style.setProperty("--ar-btn-disabled-border-color",n),s.id==="primary"&&(c("theme-link-hover-color",d(n,-10)),c("theme-accordion-btn-active-icon",`url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='${n.replace(/#/g,"%23")}'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")`),r.root.style.setProperty("--ar-link-color",n),r.root.style.setProperty("--ar-link-hover-color",d(n,-10)),r.accordion.style.setProperty("--ar-accordion-btn-active-icon",`url("data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2024%2024'%20fill='${n.replace(/#/g,"%23")}'%3e%3cpath%20d='M.5%206.3c.6-.6%201.6-.6%202.3%200l9.3%209.3%209.3-9.3c.6-.6%201.6-.6%202.3%200%20.6.6.6%201.6%200%202.3L13.3%2018.8c-.6.6-1.6.6-2.3%200L.8%208.5c-.9-.8-.9-1.6-.3-2.2z'/%3e%3c/svg%3e")`)),g())})}const p=document.getElementById("font-url"),T=document.getElementById("google-font");T.href=e("theme-font-url")||p.value,p.value=e("theme-font-url")||p.value,p.addEventListener("blur",o=>{const a=o.target.value;c("theme-font-url",a),T.href=a});const B=document.getElementById("body-font-family");B.value=e("theme-font-family")||B.value,B.addEventListener("blur",o=>{var a=o.target.value;c("theme-font-family",a),r.root.style.setProperty("--ar-body-font-family",a),g()});const w=document.getElementById("root-font-size");w.value=e("theme-root-font-size")||w.value,w.addEventListener("change",o=>{const a=o.target.value;c("theme-root-font-size",a),r.root.style.setProperty("--ar-root-font-size",a),g()});const x=document.getElementById("body-font-size");x.value=e("theme-body-font-size")||x.value,x.addEventListener("change",o=>{const a=o.target.value;c("theme-body-font-size",a),r.root.style.setProperty("--ar-body-font-size",a),g()});const P=document.getElementById("border-width");P.value=parseInt(e("theme-border-width"))||P.value,P.addEventListener("input",o=>{const a=o.target.value;c("theme-border-width",a+"px"),r.root.style.setProperty("--ar-border-width",a+"px"),g()});const E=document.getElementById("border-radius");E.value=parseFloat(e("theme-border-radius"))||E.value,E.addEventListener("input",o=>{const a=o.target.value;c("theme-border-radius",a+"rem"),r.root.style.setProperty("--ar-border-radius",a+"rem"),g()});const v=document.querySelectorAll('#theme-border-radiuses input[type="number"');for(let o=0;o<v.length;o++)v[o].value=e("theme-"+v[o].id+"multiplier")||v[o].value,v[o].addEventListener("input",a=>{const l=a.target.value;c("theme-"+a.target.id,"calc(var(--ar-border-radius) * "+l+")"),c("theme-"+a.target.id+"multiplier",l),r.root.style.setProperty("--"+t+a.target.id,"calc(var(--ar-border-radius) * "+l+")"),g()});const S=document.getElementById("customizer"),L=document.getElementById("customizer-btns");e("theme-customizer-btns")&&L.classList.remove("d-none"),S.addEventListener("change",o=>{c("theme-customizer-btns",!0),L.classList.remove("d-none")}),document.getElementById("customizer-reset-btn").addEventListener("click",()=>{let o=[];for(let a=0;a<localStorage.length;a++)localStorage.key(a).substring(0,5)=="theme"&&o.push(localStorage.key(a));for(let a=0;a<o.length;a++)localStorage.removeItem(o[a]);window.location.reload()});const z=document.getElementById("copy-styles-btn");z.addEventListener("click",o=>{const a=document.createRange();a.selectNode(b),window.getSelection().removeAllRanges(),window.getSelection().addRange(a),navigator.clipboard.writeText(b.innerHTML),o.currentTarget.innerHTML='<i class="ai-check me-2 ms-n1"></i>Copied!',setTimeout(function(){z.innerHTML='<i class="ai-copy me-2 ms-n1"></i>Copy styles'},2e3)})})();
