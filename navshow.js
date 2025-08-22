var removeSidebar=document.querySelector('.removeSidebar')
removeSidebar.addEventListener("click",()=>{
    var sideBar= document.querySelector('#sideBar')
    if(sideBar.classList.contains("-translate-x-0")){
        sideBar.classList.remove("-translate-x-0")
        sideBar.classList.add("-translate-x-3/4")
        removeSidebar.classList.add("hidden")
        document.querySelector('.showSidebar').classList.remove('hidden')
        document.querySelector('.allsection').classList.remove("lg:pl-65")
        document.querySelector('.allsection').classList.add("lg:pl-20")
        document.querySelector('#sidebaricon').classList.remove('hidden')
        
    }
})

var showSidebar=document.querySelector('.showSidebar')
showSidebar.addEventListener("click",()=>{
    var sideBar= document.querySelector('#sideBar')
    if(sideBar.classList.contains("-translate-x-3/4")){
        sideBar.classList.remove("-translate-x-3/4")
        sideBar.classList.add("-translate-x-0")
        removeSidebar.classList.remove("hidden")
        document.querySelector('.showSidebar').classList.add('hidden')
        document.querySelector('.allsection').classList.add("lg:pl-65")
        document.querySelector('.allsection').classList.remove("lg:pl-20")
        document.querySelector('#sidebaricon').classList.add('hidden')
    }
})

var menuIcon=document.querySelector('#menuIcon');

menuIcon.addEventListener("click",()=>{
    mobileNav=document.querySelector('#mobileNav')
    if(mobileNav.classList.contains('-translate-x-full')){
        mobileNav.classList.remove('-translate-x-full')
        mobileNav.classList.add('-translate-x-0')
        // document.querySelector('.allsection').classList.add('opacity-45')
    }
    else{
        mobileNav.classList.add('-translate-x-full')
        mobileNav.classList.remove('-translate-x-0')
        // document.querySelector('.allsection').classList.remove('opacity-45')
    }
})