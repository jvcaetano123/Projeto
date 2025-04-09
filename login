import flet as ft
#Comando para Criação de Página em branco
def main(page:ft.Page):
 page.bgcolor ='#FFFFFF'
 page.add(ft.SafeArea(ft.Text("Iniciar sua Sessão")))
 page.window_width ='350'
 page.window_height ='400'
 page.window_resizable = False
 page.padding = 75
 page.window_center
 page.window_maximizable = False
 page.add(input_us, input_sn, btn,btn_es)

#botões
btn = ft.FilledButton(text = "Acessar",on_click = True,)
btn.bgcolor ='4682B4'
btn.width = '500'
#botao:esqueci minha senha
btn_es = ft.FilledButton(text = "esqueceu sua senha?",on_click = True)
btn_es.width ='500'


#Criação de Entrada de Dados
input_us = ft.TextField(label = "usuario")
input_sn = ft.TextField(label = "senha",password = True,can_reveal_password=True)



ft.app(main)
