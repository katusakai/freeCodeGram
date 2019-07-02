#####This code is written following video link below. 
https://www.youtube.com/watch?v=ImtZ5yENzgE&list=WL&index=21&t=0s

## Changes from video
1. All href attributes changed from hardcode to {{route('route_name')}}, {{url('/link')}}
2. Added option to login with google account.

## Instalation notes
1. create file **/database/database.sqlite**
2. run **php artisan migrate**
3. rename **.env.example** to **.env**
4. inside **.env** change **GOOGLE_CLIENT_ID**, **GOOGLE_CLIENT_SECRET** according to your google api.
5. run **php artisan serve** and go to given url