function showSection(sectionID){
    const sections=document.querySelectorAll(".userSection")
    sections.forEach((section)=>{
        section.style.display= "none";
    })
    document.getElementById(sectionID).style.display= "block"
}
