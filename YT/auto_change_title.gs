var videoID = 'LONZOIscXcs'; e.com/*/
/*your video id
https://YouTube.com/LONZOIscXcs
notes: 
-  use the YouTube account where you store the video to log in to google sheets
- you can't use video on account A and then register for account B on google sheets so it won't work.
*/
var part = 'snippet,statistics';
var params = {'id': videoID};
  
var response = YouTube.Videos.list(part, params);
var video = response.items[0];
var view = video.statistics.viewCount;
var like = video.statistics.likeCount;
var dislike = video.statistics.dislikeCount;
var cmt = video.statistics.commentCount;
var title = 'this video has' + ' [views: '+view+ ', likes: '+like + ', dislikes: '+dislike+ ', comments: '+cmt+"]";
  
video.snippet.title = title; 
video.snippet.description = "here is the description";
 
YouTube.Videos.update(video, part);
   
