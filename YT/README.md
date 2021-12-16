Here I have some API CODE for YOUTUBE
Ex:
* Auto comment 
* Auto change title + Description
* Auto change Thumbnail 
* Auto subscribe 
## notes:
* Here I only post the code and instructions on how to use them, the rest you can watch on [Youtube](https://youtube.com)
### And the YOUTUBE API service is free, but you will also have to pay a price offered by YOUTUBE which is [QUOTA](https://developers.google.com/youtube/v3/getting-started#quota) Query, add, delete data will take a certain amount of Quota.
## [visit](https://developers.google.com/youtube/v3/docs)
## USE.1: [auto_change_title](https://github.com/toan06/API/blob/main/YT/auto_change_title.gs)
* step1: Login to google sheets account with YT account containing video
* step2: Click on the 3 dashes on the left to select, new project
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_174438.png)
* Step3: Choose a new project
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_174451.png)
* Step4: After creating a new project you will have a screen like
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_180222.png)
* Step5: Add _Youtube api v3_ in the _service_ section
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_173627.png)
* Step6: after completing the above steps you will now copy the code [auto_change_title](https://raw.githack.com/toan06/API/main/YT/auto_change_title.gs), Note that you need to put the code in a function and the name of that function must be unique and cannot be duplicated
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_180222.png) 
* Step7: Save it and run if the result at the logger screen Like below is successful, now let it automatically execute the query
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_180222.png)
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_181014.png)
## USE.2:
### automatic:
* Step1: Click on the clock image in the menu selection
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_182343.png)
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_182404.png)
* Step2: Set automation time 
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_182709.png)
![](https://github.com/toan06/API/blob/main/img/Screenshot_20211216_182728.png)
* step3: At the first item you need to choose the function name that you have set at the beginning or leave the default as myFunction()
>_1:_ Your function name
>_2:_ first part
>_3:_ by the time
>_4:_ minute clock
>_5:_ 1 minute at a time
