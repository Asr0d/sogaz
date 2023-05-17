function loadQuestions(questions) {
    window.questions = questions;
}

$.ajax({
    url: "/api/test",
    method: "GET",
    success: function(response) {
        if (response.status === 200 && response.test.length > 0) {
            // Получаем не более 10 вопросов из ответа
            let questionsData = response.test.slice(0, 10);

            // Формируем массив объектов вопросов
            let questions = [];
            for (let i = 0; i < questionsData.length; i++) {
                let options = JSON.parse(questionsData[i].options);
                let question = {
                    numb: i + 1,
                    id: questionsData[i].id,
                    question: questionsData[i].question_text,
                    answer: questionsData[i].answer,
                    options: options.slice(0, 4)
                };
                questions.push(question);
            }

            // Присваиваем полученный массив переменной в глобальной области видимости
            loadQuestions(questions);
        } else {
            console.log("Ошибка получения данных с сервера");
        }
    },
    error: function(error) {
        console.log("Ошибка запроса к серверу");
        console.log(error);
    }
});
