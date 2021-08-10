<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./indexstyle.css">
    <title>Persona Form</title>
</head>
<body>
<h1>PERSONA BUILDER</h1>
    <form action="persona.php" method="POST">
    
        <fieldset>
            <legend>Profile informations</legend>
                <label for="status">Status :
                    <select name="status" id="status">
                        <option value="Current Student">Current Student</option>
                        <option value="Alumni">Alumni</option>
                    </select><br>
                </label> 
                <label for="name">Name * :
                    <input type="text" name="name" required><br>
                </label>
                <label for="age">Age * :
                    <input type="text" name="age" required><br>
                </label>     
            <label for="gender">Gender :
                <select name="gender" id="gender">
                    <option value="Male">male</option>
                    <option value="Female">female</option>
                </select><br>
            </label>
            <label for="">City * :
                <input type="text" name="city" required><br>
            </label>
            <label for="image">Image : 
            <select name="image" id="image">
                <option value="images/female-student.png">female student</option>
                <option value="images/male-alumni.png">male alumni</option>
            </select><br>
            </label>
            <label for="">Description :<br>
                <textarea name="description" id="description" cols="30" rows="4"></textarea><br>
            </label>
        </fieldset>

        <fieldset>
            <legend>Personality</legend>
            <label for="personality">Personality Type
                <select name="personalitytype" id="personality">
                    <option value="INTJ">INTJ</option>
                    <option value="INTP">INTP</option>
                    <option value="ENTJ">ENTJ</option>
                    <option value="ENTP">ENTP</option>
                    <option value="INFJ">INFJ</option>
                    <option value="INFP">INFP</option>
                    <option value="ENFJ">ENFJ</option>
                    <option value="ENFP">ENFP</option>
                    <option value="ISTJ">ISTJ</option>
                    <option value="ISFJ">ISFJ</option>
                    <option value="ESTJ">ESTJ</option>
                    <option value="ESFJ">ESFJ</option>
                    <option value="ISTP">ISTP</option>
                    <option value="ISFP">ISFP</option>
                    <option value="ESTP">ESTP</option>
                    <option value="ESFP">ESFP</option>
                </select>
                <select name="trait" id="trait">
                    <option value="-A">Assertive</option>
                    <option value="-T">Turbulent</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <legend>Education</legend>
            <ul>
                <li>
                    <input type="checkbox" id="graduate" name="graduatebox" value="1">
                    <label for="graduate">Graduate</label><br>
                    <textarea name="graduate" cols="30" rows="4"></textarea><br>
                 </li>
                <li>
                    <input type="checkbox" id="undergraduate" name="undergraduatebox" value="1">
                    <label for="undergraduate">Undergraduate</label><br>
                    <textarea name="undergraduate" id="undergraduate" cols="30" rows="4"></textarea><br>
                 </li>
                <li>
                    <input type="checkbox" id="highschool" name="highschoolbox" value="1">
                    <label for="highschool">High School</label><br>
                    <textarea name="highschool" id="highschool" cols="30" rows="4"></textarea><br>
                 </li>
            </ul>
        </fieldset>

        <fieldset>
            <legend>Work Life</legend>
                <div class="flex">
                    <select name="worklife1" id="worklife1">
                        <option></option>
                        <option value="Entrepreneur">Entrepreneur</option>
                        <option value="Employed">Employed</option>
                        <option value="Freelances">Freelances</option>
                    </select>
                    <select name="worklife2" id="worklife2">
                        <option></option>
                        <option value="Entrepreneur">Entrepreneur</option>
                        <option value="Employed">Employed</option>
                        <option value="Freelances">Freelances</option>
                    </select>
                </div>
            <textarea name="worklife3" id="worklife" cols="30" rows="4"></textarea><br>
        </fieldset>

        <fieldset>
            <legend>Hobbies</legend>
            <ul>
                <li><input type="text" name="hobbie1"></li>
                <li><input type="text" name="hobbie2"></li>
                <li><input type="text" name="hobbie3"></li>
                <li><input type="text" name="hobbie4"></li>
                <li><input type="text" name="hobbie5"></li>
            </ul>
        </fieldset>

        <fieldset id="digitalcommunities">
            <legend>Digital Communities</legend>
            <select name="digcom1">
                <option></option>
                    <option value="icons/instagram.png">Instagram</option>
                    <option value="icons/spotify.png">Spotify</option>
                    <option value="icons/messenger.png">Messenger</option>
                    <option value="icons/github.png">Github</option>
                    <option value="icons/slack.png">Slack</option>
                    <option value="icons/youtube.png">Youtube</option>
                    <option value="icons/whatsapp.png">Whatsapp</option>
                </select>
            <select name="digcom2">
            <option></option>
                    <option value="icons/instagram.png">Instagram</option>
                    <option value="icons/spotify.png">Spotify</option>
                    <option value="icons/messenger.png">Messenger</option>
                    <option value="icons/github.png">Github</option>
                    <option value="icons/slack.png">Slack</option>
                    <option value="icons/youtube.png">Youtube</option>
                    <option value="icons/whatsapp.png">Whatsapp</option>
                </select>
            <select name="digcom3">
            <option value=""></option>
                    <option value="icons/instagram.png">Instagram</option>
                    <option value="icons/spotify.png">Spotify</option>
                    <option value="icons/messenger.png">Messenger</option>
                    <option value="icons/github.png">Github</option>
                    <option value="icons/slack.png">Slack</option>
                    <option value="icons/youtube.png">Youtube</option>
                    <option value="icons/whatsapp.png">Whatsapp</option>
                </select>
            <select name="digcom4">
            <option value=""></option>
                    <option value="icons/instagram.png">Instagram</option>
                    <option value="icons/spotify.png">Spotify</option>
                    <option value="icons/messenger.png">Messenger</option>
                    <option value="icons/github.png">Github</option>
                    <option value="icons/slack.png">Slack</option>
                    <option value="icons/youtube.png">Youtube</option>
                    <option value="icons/whatsapp.png">Whatsapp</option>
                </select>
        </fieldset>

        <fieldset>
            <legend>Digital Media</legend>
            <textarea name="digmedia" id="digitalmedia" cols="30" rows="4"></textarea><br>
        </fieldset>

        <fieldset>
            <legend>Goals</legend>
            <ul>
                <li><input type="text" name="goal1"></li>
                <li><input type="text" name="goal2"></li>
                <li><input type="text" name="goal3"></li>
            </ul>
        </fieldset>

        <fieldset>
            <legend>Frustrations</legend>
            <ul>
                <li><input type="text" name="frustration1"></li>
                <li><input type="text" name="frustration2"></li>
            </ul>
        </fieldset>

        <button type="submit" name="submit" value="submit">submit</button>
    </form>

</body>
</html>