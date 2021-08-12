# chat/urls.py
from django.urls import path

from . import views

urlpatterns = [
    path('welcome', views.welcome, name='welcome'),
    path('Checklist', views.Checklist, name='Checklist'),
    path('Companies', views.Companies, name='Companies'),
    path('CompaniesEnlarge', views.CompaniesEnlarge, name='CompaniesEnlarge'),
    path('CompaniesSearch', views.CompaniesSearch, name='CompaniesSearch'),
    path('DailyTasks', views.DailyTasks, name='DailyTasks'),
    path('Leaderboard', views.Leaderboard, name='Leaderboard'),
    path('LogIn', views.LogIn, name='LogIn'),
    path('MonthlyTasks', views.MonthlyTasks, name='MonthlyTasks'),
    path('WeeklyTasks', views.WeeklyTasks, name='WeeklyTasks'),
    path('Checkboxes', views.Checkboxes, name='Checkboxes'),
    path('<str:room_name>/', views.room, name='room'),
]
