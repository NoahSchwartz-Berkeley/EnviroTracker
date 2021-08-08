# chat/views.py
from django.shortcuts import render

def welcome(request):
    return render(request, 'draw/welcome.html')

def room(request, room_name):
    return render(request, 'draw/room.html', {
        'room_name': room_name
    })
