document.getElementById('btn1').addEventListener('click', function () {
    console.log("Выбранные варианты:");

    //Вопрос 1
    var selectElement = document.getElementById('care-product');
    var selectedOption1 = selectElement.value;
    if (selectedOption1 !== '') {
        console.log("Вопрос 1:", selectedOption1);
    } else {
        console.log("Пожалуйста, выберите средство в первом вопросе!");
    }

    //Вопрос 2
    var selectElement = document.getElementById('product-detail');
    var selectedOption2 = selectElement.value;
    if (selectedOption2 !== '') {
        console.log("Вопрос 2:", selectedOption2);
    } else {
        console.log("Пожалуйста, выберите средство в первом вопросе!");
    }

    var selectedOption3 = document.querySelector('input[name="flexRadioDefault"]:checked').nextElementSibling.textContent;
    var selectedOption4 = document.querySelector('input[name="flexRadioDefault1"]:checked').nextElementSibling.textContent;
    var selectedOption5 = document.querySelector('input[name="flexRadioDefault2"]:checked').nextElementSibling.textContent;
    var selectedOption6 = document.querySelector('input[name="flexRadioDefault3"]:checked').nextElementSibling.textContent;


    console.log("Вопрос 3:", selectedOption3);
    console.log("Вопрос 4:", selectedOption4);
    console.log("Вопрос 5:", selectedOption5);
    console.log("Вопрос 6:", selectedOption6);
});

