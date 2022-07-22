# Really Simple Laravel Multi Message
en-us: An easy way to have multi flash messages in Laravel aplications. 

pt-br: Uma forma fácil de exibir várias flash messages em aplicações Laravel.

## Como usar?

1. Baixe ou clone este repositório e cole na pasta raíz do seu projeto Laravel.
2. Na view de layout ou na view que voçê deseja exibir as mensagens voçê deve escrever "@include('partials.messages')" na posição em que deseja que as mensagens sejam exibidas.
3. No arquivo "style_config.php" em "public/php" voçê pode escolher qual estilo de mensagens desaja usar, assim como se deseja usar um botão para o usuário poder fechar a mensagem.
4. No Controller que voçê deseja utilizar o sistema de multi-mensagens voçê deve declarar "use App\Actions\Message\Flash;".
5. No momento são suportadas três tipos de mensagens: Flash::error("Mensagem de erro!"), Flash::success("Mensagem de sucesso!") e Flash::warning("Mensagem de aviso!").

## How to use?

1. Download or clone this repository and paste in the root of your Laravel project.
2. In the layout view or in the view that you want to show the messages, you have to write "@include('partials.messages')" right in the position that you want to show the messages.
3. In the file "style_config.php" in "public/php" you can choose what message style you want to use, as well as choose if you want to use an dismiss button so the user will can close the message.
4. In the Controller that you will use the multi-message system, you will have to declare "use App\Actions\Message\Flash;"
5. In the moment three types of messages are supported: Flash::error("An error message!"), Flash::success("An success message!") and Flash::warning("An warning message!").


### Capturas de telas usando os estilos disponíveis / Screenshots using the available styles

* Semantic-ui

![semantic-ui](https://user-images.githubusercontent.com/65090509/180442844-0fdb9932-abfc-4ea0-891c-9fbf243bddb1.png)


* Semantic-ui + botão de fechar / dismiss button

![semantic-ui+close-buttom](https://user-images.githubusercontent.com/65090509/180443071-fdb6b249-c8a1-45ae-af4d-97cb61f1cb20.png)


* Boostrap

![bootstrap](https://user-images.githubusercontent.com/65090509/180443157-50d7d979-dab1-4f19-8e37-0fac34fe22e5.png)


* Bootstrap + botão de fechar / dismiss button

![bootstrap+close-buttom](https://user-images.githubusercontent.com/65090509/180443281-33156ffe-d02d-4e0b-a1fd-1bdb6b3cfc4f.png)


* Default

![default](https://user-images.githubusercontent.com/65090509/180443331-9f7eab95-e467-42ce-8004-6e926c9f89c5.png)


* Default + botão de fechar / dismiss button


![default+close_buttom](https://user-images.githubusercontent.com/65090509/180443431-9ea947ee-0b55-4b95-bc80-6c5ddca80945.png)
