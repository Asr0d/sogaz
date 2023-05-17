$('#save_category').on('click', function() {
    let title = $('#title').val();
    $.ajax({
        url: '/api/category',
        type: 'POST',
        data: {title: title},
        success: function(response) {
            $('#title').val('');
            console.log(response);
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
});

$('#save_company').on('click', function() {
    let title = $('#name-company').val();
    $.ajax({
        url: '/api/company',
        type: 'POST',
        data: {title: title},
        success: function(response) {
            $('#save_company').val('');
            console.log(response);
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
});

$('#save_test').click(function() {
    let category_id = $('select[name="category-select"] option:selected').val();
    let question_text = $('input[name="question-text"]').val();

    // Получаем значения всех полей ввода опций
    let options = $('input[name^="answer-option"]').map(function() {
        return $(this).val();
    }).get();

    // Получаем выбранный текст опции
    let correct_answer_index = $('select[name="correct-answer"] option:selected').index();
    let correct_answer = options[correct_answer_index];

    let url = "/api/test";
    let data = {
        category_id: category_id,
        question_text: question_text,
        options: JSON.stringify(options),
        answer: correct_answer
    };

    $.ajax({
        url: url,
        method: 'POST',
        data: data,
        success: function(response) {
            // код, который выполняется при успешном завершении запроса
            alert('Вопрос успешно добавлен!');
            // очистить поля формы
            $('select[name="category-select"], input[name="question-text"], input[name^="answer-option"], select[name="correct-answer"]').val('');
        },
        error: function(error) {
            // код, который выполняется при ошибке
            alert('Ошибка при добавлении вопроса!');
            console.log(error);
        }
    });
});

$('#save_course').on('click', function() {
    let title = $('#title').val();
    let file = $('#file')[0].files[0];
    let level = $('[name="level"]').val();
    let formData = new FormData();
    formData.append('title', title);
    formData.append('file', file);
    formData.append('level', level);
    $.ajax({
        url: '/api/course',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);
            $('#title').val('');
            $('#file').val('');
            $('[name="level"]').val('1'); // Для установки значения по умолчанию в поле select
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
});
$('.delete-course').on('click', function() {
    let id = $(this).data('id');
    $.ajax({
        url: '/api/course/' + id,
        type: 'DELETE',
        success: function(response) {
            console.log(response);
            // удаление строки из таблицы
            $(this).closest('tr').remove();
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
});

//     $('#save_test').click(function() {
//         let category_id = $('select[name="category-select"] option:selected').val();
//         let question_text = $('input[name="question-text"]').val();
//
// // Получаем значения всех полей ввода опций
//         let options = $('input[name^="answer-option"]').map(function() {
//             return $(this).val();
//         }).get();
//
// // Получаем выбранную опцию
//         let correct_answer = '"' + $('select[name="correct-answer"] option:selected').text() + '"';
//
//         let url = "/api/test";
//         let data = {
//             category_id: category_id,
//             question_text: question_text,
//             options: JSON.stringify(options),
//             answer: correct_answer
//         };
//
//         $.ajax({
//             url: url,
//             method: 'POST',
//             data: data,
//             success: function(response) {
//                 // код, который выполняется при успешном завершении запроса
//                 alert('Вопрос успешно добавлен!');
//                 // очистить поля формы
//                 $('select[name="category-select"], input[name="question-text"], input[name^="answer-option"], select[name="correct-answer"]').val('');
//             },
//             error: function(error) {
//                 // код, который выполняется при ошибке
//                 alert('Ошибка при добавлении вопроса!');
//                 console.log(error);
//             }
//         });
//     });


