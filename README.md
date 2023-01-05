# chapt11exerPHPpart2

This chapter has multiple parts, and several need additional information. Read through these instructions, and read Chapter 11 in the textbook as directed.

You will be taking screenshots of your running projects. Make sure to name them to identify the task being demonstrated, and use sequential numbers for multiple screenshots in the same task. For example, name images with task1-1, task1-2 for 2 images in Task 1, task2-1, task2-2, task2-3 for 3 images in Task 2, and so on.

 

## Task 2: Handling File Uploads

The book mentions the phpinfo() function. Create a PHP script that contains a single call to the phpinfo() function. That script looks like this:

     <?php
     phpinfo();
     ?>

Run the script; the results contains a lot more than what you see in the image in the book. Scroll down through the output until you find the file-handling information mentioned in the book, the fields labeled as file_uploads, post_max_size, upload_max_filesize, upload_tmp_dir. It will look similar to this:

![ch11-phpInfo.PNG](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/pictures/ch11-phpInfo.PNG)

Note the yellow box, which contains the sendmail_path information you edited in Task 1. Take a screenshot of the portion of the phpinfo information for your system that shows the same data as in the example.

Continue with this section in the book, creating the upload_image.php script. Be sure to create the uploads folder in the xampp folder, so it is under xampp and next to htdocs, php, sendmail, etc.

Make some modifications to the form in the CSS, so that the font size is larger, the width is 50%, and the right and left margins are "auto" to center that 50% width on the page. When you have successfully uploaded an image, take a screenshot of the success message, which should resemble this:

![ch11-file-success.PNG](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/pictures/ch11-file-success.PNG)

Run the script at least 4 times, to upload at least 4 images. These images will be needed in the next part. Use images of different sizes, mixing .jpg and .png images.

Take a screenshot of the xampp/uploads file folder, showing at least two images in it. Be sure to include the path name in the screenshot. In this example, there are 4 files that were uploaded during testing. Note that they were stored in the xampp/uploads folder.

![ch11-file-uploads.PNG](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/pictures/ch11-file-uploads.PNG)

![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/task2-1phpInfo.PNG)

![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/task2-4picPreUpload.PNG)

![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/task2-2picUploadSuccess.PNG)

![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/task2-5errorPicTooBig.PNG)

![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/task2-6errorWrongFileType.PNG)

![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/task2-7uploadProof.PNG)

![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/2.10.PNG)




## Task 3: PHP and JavaScript

Create the files for the JavaScript file, function.js, and the PHP files images.php and show_images.php, as directed in the book.

Hints:

For the JavaScript file, the variable "specs" must be typed with no extra spaces or line breaks. You might want to space it out or put it on multiple lines for better readability -- don't do it, you will get errors.

These 3 files all go into your ch11 htdocs folder (xampp/htdocs/ch11). The images that you uploaded in the previous part are in another folder -- you need to figure out where it is in relation to your ch11 htdocs folder and use the appropriate reference to that folder in the show_image.php file, where it sets up the full image path information.

The book references an image that says "Unavailable". You can find it in the textbook download files. In the ch11 htdocs folder, create a new folder named "images" and put that image file there (xampp/htdocs/ch11/images/unavailable.png).

(Note from Kevin: Make sure your JavaScript file in inside the PHP file, or else it will not work.)

Once you have gotten these scripts to work, add some CSS to the images.php file, embedded in the head tag. Make the text of the page a little more visible by increasing the font size and moving the text toward the center. Make the font-size at least x-large; use a left margin of 40% to move the lines of output toward the middle of the page; use a top margin of 50px to move it downward on the page. Take a screenshot of the page with one of the images displayed. That screenshot needs to show both the image and some of the text of the page, like this:

![ch11-imagePopup.PNG](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/pictures/ch11-imagePopup.PNG)

If necessary, move the text on the page even farther to the right, so that the pop-up window with the image doesn't completely cover the text. This screenshot needs to show both the text of the page and the image pop-up in the top left.

![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/task2-10finalShot.PNG)

## Task 4: Date and Time Functions

Follow the instructions in this section to change the images.php script to display the file size and date/time stamp of each file in the uploads directory. After it is working, make the following changes. (a) Change the default time one to "America/Denver", to get Mountain Standard Time instead of Eastern. (See https://www.php.net/manual/en/timezones.america.php Links to an external site.for a list of PHP time zones.) Look at Table 11.4 in the book for the different formatting options, and change the format of the output displayed. (b) Instead of spelling out the month name, use the 3-letter version. (c) Change the time from 24-hour format to 12-hour format and (d) add the "am" or "pm" at the end. (e) The hour should be 1 or 2 digits, so it prints 4 instead of 04. After these changes are working, take a screenshot of a different one of the images in your uploads folder, with the details of all the images visible on the screen. This may require making the left margin in the CSS larger, moving the text more to the right to make it visible next to the image. Here is an example:

![ch11-datetime.PNG](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/pictures/ch11-datetime.PNG)

 ![p](https://github.com/bell-kevin/chapt11exerPHPpart2/blob/main/chap11exerPart2/pictures/task4.PNG)

Screenshots: The 5 screenshots are:

1. the phpinfo page showing fields for upload file size and temp directory, etc.
2. success message after file upload.
3. XAMPP upload folder, showing at least 2 files.
4. Popup of one of the images plus the list of files to the right.
5. Popup of another image plus the list of files to the right with date and time information, using 3-letter month abbreviation, 2-digit day, 4-digit year, time in 12-hour format with am/pm using 1 or 2 digits for the hour.
 

Submission: Zip all the files required for successful running of the scripts, and include the 5 specified screenshots. Submit the single zip folder.

== We're Using GitHub Under Protest ==

This project is currently hosted on GitHub.  This is not ideal; GitHub is a
proprietary, trade-secret system that is not Free and Open Souce Software
(FOSS).  We are deeply concerned about using a proprietary system like GitHub
to develop our FOSS project. I have a [website](https://bellKevin.me) where the
project contributors are actively discussing how we can move away from GitHub
in the long term.  We urge you to read about the [Give up GitHub](https://GiveUpGitHub.org) campaign 
from [the Software Freedom Conservancy](https://sfconservancy.org) to understand some of the reasons why GitHub is not 
a good place to host FOSS projects.

If you are a contributor who personally has already quit using GitHub, please
email me at **bellKevin@pm.me** for how to send us contributions without
using GitHub directly.

Any use of this project's code by GitHub Copilot, past or present, is done
without our permission.  We do not consent to GitHub's use of this project's
code in Copilot.

![Logo of the GiveUpGitHub campaign](https://sfconservancy.org/img/GiveUpGitHub.png)
