const track = document.getElementById("image-track");

window.onmousedown = e => {
    track.dataset.mouseDownAt = e.clientX;
}

window.onmouseup = () => {
    track.dataset.mouseDownAt = "0";
    track.dataset.prevPercentage = track.dataset.percentage;
}

window.onmousemove  = e => {
    if(track.dataset.mouseDownAt === "0") return;

    const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
        maxDelta = window.innerWidth / 2;

    const percentage = (mouseDelta / maxDelta) * -100;
    const nextpercentage = parseFloat(track.dataset.prevPercentage) + percentage;

    track.dataset.percentage = nextpercentage;

    // track.style.transform = `translate(${nextpercentage}%, -50%)`;
    track.animate({
        transform: `translate(${nextpercentage+50}%, 50%)`
    }, {duration: 1200, fill: "forwards" });

    for(const img of track.getElementsByClassName("image")) {
        img.animate({
            objectPosition: `${nextpercentage + 100}% center`
        }, {duration: 1200, fill: "forwards"});
    };
    // document.getElementById("track-bg").animate({
    //         transform: `translate(-5%,${nextpercentage / 3}%)`
    //     }, {duration: 1200, fill: "forwards"});
}


// window.addEventListener('scroll', function () {
//     const percentage = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
//     console.log(percentage);
//     if(percentage >= "50") {
//         document.getElementById("first_slide").animate({
//             backgroundColor: "white"
//         }, {duration: 1200, fill: "forwards"});
//         document.getElementById("second_slide").animate({
//             backgroundColor: "black"
//         }, {duration: 1200, fill: "forwards"});
//     }else if(percentage <= "50") {
//         document.getElementById("second_slide").animate({
//             backgroundColor: "white"
//         }, {duration: 1200, fill: "forwards"});
//         document.getElementById("first_slide").animate({
//             backgroundColor: "black"
//         }, {duration: 1200, fill: "forwards"});
//     };
// });
