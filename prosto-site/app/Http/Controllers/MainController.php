<?php


namespace App\Http\Controllers;
use App\Models\Day;
use Illuminate\Http\Request;


class MainController
{
    function actionMainPage() // внешняя функция
    {
        return view("index", [
            "days" => Day::all()
        ]);
    }

    function actionDeleteDay($id, Request $request)
    {
        /** @var Day $days */
        $days= Day::where('id', id)->first();
        try {
            $days->delete();
        } catch (\Exception $e) {

        }
        return redirect()->route("goToMain");
    }

    function actionSaveDay($id, Request $request)
    {
        /** @var Day $days */
        $days = Day::where('id', $id)->first();

        $days->name_of_day = $request->input("title");
        $days->subjects_and_homeworks = $request->input("text");
        $days->date = $request->input("date");
        $days->save();
        return redirect()->route("editDay", ["id" => $id]);
    }

    function actionRedactDay($id) // внешняя функция
    {
        return view("redactDay", [
            "days" => Day::where('id', $id)->first()
        ]);
    }

    function actionAddDay(Request $request)
    {
        /** @var Day $days */
        $days = new Day();

        $days->name_of_day = $request->input("title");
        $days->date = $request->input("date");
        $days->subjects_and_homeworks = $request->input("text");
        $days->save();
        return redirect()->route("goToMain");
    }

    function actionViewAddDay()
    {
        return view("newDay");
    }
}
