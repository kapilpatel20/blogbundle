

<P STYLE="margin-bottom: 0in"><FONT SIZE=4><B>Blog bundle sample code
using symfony 2.3 </B></FONT><BR><BR><BR><FONT SIZE=3><B>Steps to Run
the project</B></FONT></P>
<p> </> 
<P STYLE="margin-bottom: 0in"><BR>    
1) Create clone or download with git  <BR><BR>
2) Change DB settings at  app/config/parameters.yml <br> 
 Default setting is :<br> database_user: root <br/> database_password : root <br/> database_name: blogs <BR><BR>
2) composer update <BR><BR>    
3) $php app/console doctrine:database:create  <BR><BR>  
4) $php app/console doctrine:schema:update --force <BR><BR>    
5) $php app/console assets:install<BR><BR><BR>

<b>Run following queries to insert records</b> <br/><br/>
INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'admin@brainvire.com', 'admin@brainvire.com', 1, '6h4c6amypxk40ggo4k4gg0o0o4sog0w', '$2y$13$6h4c6amypxk40ggo4k4gguCXFBKPIVSY.CDCaVyCjVl.x58tbaUSK', '2015-06-23 19:57:44', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);	
<br/>
<br/>

<p><b>Test User name and password</b> </p>
<p>
UserName : admin <br/>
Password : admin
</p>
<BR>
<B>We have used following third
party bundle</B><BR>    
1) &quot;stfalcon/tinymce-bundle&quot;:&quot;dev-master&quot;  
2) &quot;friendsofsymfony/user-bundle&quot;:&quot;~2.0@dev&quot;<BR>
3) ircmaxell/password-compat 

</P>
