# chat/views.py
from django.shortcuts import render

def welcome(request):
    return render(request, 'draw/welcome.html')
def Checklist(request):
    return render(request, 'draw/Checklist.html')
def Companies(request):
    return render(request, 'draw/Companies.html')
def CompaniesEnlarge(request):
    return render(request, 'draw/CompaniesEnlarge.html')
def CompaniesSearch(request):
    return render(request, 'draw/CompaniesSearch.html')
def DailyTasks(request):
    return render(request, 'draw/DailyTasks.html')
def Leaderboard(request):
    return render(request, 'draw/Leaderboard.html')
def LogIn(request):
    return render(request, 'draw/LogIn.html')
def MonthlyTasks(request):
    return render(request, 'draw/MonthlyTasks.html')
def WeeklyTasks(request):
    return render(request, 'draw/WeeklyTasks.html')
def Checkboxes(request):
    return render(request, 'draw/Checkboxes.html')
def room(request, room_name):
    return render(request, 'draw/room.html', {
        'room_name': room_name
    })
