function changeTheme() {
    var element = document.getElementById("myElement");
    
    if (element.classList.contains("ligth")) {
        element.classList.remove("ligth");
        element.classList.toggle("dark");
        // Класс js отсутствует у элемента

    } else {
        element.classList.remove("dark");
        element.classList.toggle("ligth");
        // Класс js отсутствует у элемента
        }
        
}