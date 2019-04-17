# ms-computernetwork-clientserver
Multi Client / Server application developed for computer network discipline on master degree

Alexandre Bento Pereira - Master's Degree in Computer Intelligence and Optimization - alexandre.bento.pereira@gmail.com

Developed using:
- HTML; Javascript; CSS; Bootstarp 4.0; PHP; Websocket PHP API;

How to execute:
- Open terminal on root directory and run:
- nohup php -q socket_server.php "folder" "port" &;
- Launch the web-server application (example: wamp, xampp, etc);
- Open Browser (see this link for Websocket API browser compatibility);
- Open the link: localhost/"project-folder"/socket_client.html;
- Choose the port and click on 'Go' button (same port used on terminal command);
- Use command navigator localhost/"folder"/test/ "port" (default port: 80)
- Websocket status: 0 - connecting; 1 - open; 2 - closing; 3 - closed;
