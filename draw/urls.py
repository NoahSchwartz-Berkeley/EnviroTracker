# chat/urls.py
from django.urls import path

from . import views

urlpatterns = [
    path('welcome', views.welcome, name='welcome'),
    path('<str:room_name>/', views.room, name='room'),
]
