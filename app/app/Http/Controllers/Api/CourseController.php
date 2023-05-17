<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();

        if($course-> count() > 0){
            return response()->json([
                'status' => 200,
                'course' => $course
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'course' => 'No data'
            ], 404);

        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'file' => 'required|file',
            'level' => 'required|string'
        ], [
            'title.required' => 'Поле Название является обязательным',
            'title.string' => 'Поле Название должно быть строкой',
            'file.required' => 'Поле Файл является обязательным',
            'file.file' => 'Поле Файл должно быть файлом',
            'level.required' => 'Поле Уровень является обязательным',
            'level.string' => 'Поле Уровень должно быть строкой',
        ]);

        $course = Course::create([
            'title' => $validatedData['title'],
            'file' => '',
            'level' => $validatedData['level']
        ]);

        if ($course) {
            // сохраняем файл на сервере и получаем путь к нему
            $path = $validatedData['file']->storeAs('courses', $validatedData['file']->hashName(), 'public_uploads');

            // обновляем запись в базе данных с путем к файлу
            $course->update([
                'file' => $path
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Good'
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'No good'
            ], 500);
        }
    }
    public function show($id)
    {
        // Получаем информацию о файле из базы данных по идентификатору $id
        $course = Course::findOrFail($id);
        $file_path = $course->file;

        // Получаем полный путь к файлу
        $path = storage_path('app/public/uploads/' . $file_path);

        // Определяем тип файла и устанавливаем соответствующий заголовок Content-Type
        switch (pathinfo($path, PATHINFO_EXTENSION)) {
            case 'pdf':
                $content_type = 'application/pdf';
                break;
            case 'doc':
            case 'docx':
                $content_type = 'application/msword';
                break;
            case 'xls':
            case 'xlsx':
                $content_type = 'application/vnd.ms-excel';
                break;
            case 'ppt':
            case 'pptx':
                $content_type = 'application/vnd.ms-powerpoint';
                break;
            default:
                $content_type = 'application/octet-stream';
                break;
        }

        // Устанавливаем заголовки
        $headers = [
            'Content-Type' => $content_type,
        ];

        // Возвращаем файл с установленными заголовками
        return response()->file($path, $headers);
    }


    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return response()->json(['message' => 'Course deleted successfully'], 200);
    }

}
