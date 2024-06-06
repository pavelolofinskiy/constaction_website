function changeText () {
    var targetedText1 = document.getElementById('first-p')
    var targetedText2 = document.getElementById('second-p')
    var targetedText3 = document.getElementById('third-p')
    if (window.matchMedia("(max-width: 460px)").matches) {
        targetedText1.textContent = "We, in partnership with Pacificmark Construction, completed a six-story, 292,000 SF high school in Portland, prioritizing safety. The project includes specialized classrooms, sustainability features, and new athletic facilities.";
        targetedText2.textContent = "We built Wild Ginger's new South Lake Union location, nestled in Clise Properties’ McKenzie Seattle. With a cozy ambiance, it seats 150 and boasts high-end finishes, delivering a seamless dining experience.";
        targetedText3.textContent = "Hoffman expanded the Foster School of Business with Founders Hall, collaborating with the University of Washington and LMN Architects, enhancing academic facilities."
    } else {
        targetedText1.textContent = "We, in partnership with Pacificmark Construction, built a six-story, 292,000 SF high school for Portland Public Schools, featuring specialized classrooms, a 500-seat auditorium, athletic facilities, and sustainability features, ensuring student safety during construction on the existing campus.";
        targetedText2.textContent = "In Seattle's bustling South Lake Union, the latest addition to the Wild Ginger family resides at McKenzie Seattle, constructed specially  by us. Seating 150 guests, it offers an intimate dining experience with high-end finishes, executed flawlessly within the tight five-month construction schedule.";
        targetedText3.textContent = "In partnership with the University of Washington and LMN Architects, we led the expansion of the Foster School of Business with Founders Hall. Spanning 85,500 square feet, the facility enhances academic resources, campus dynamics, and flexibility for evolving requirements."
    }
}

window.addEventListener("resize", changeText);
changeText();


