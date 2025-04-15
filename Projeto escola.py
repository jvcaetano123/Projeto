import flet as ft

def main(page: ft.Page):
    page.window.center()
    page.window.width = 1200
    page.window.height = 650
    page.bgcolor = "#ffffff"
    page.window.title_bar_hidden = True
    page.padding = 0
    
    containermenu = ft.Container(
        width = 200,
        height = 645,
        bgcolor = "#000000",
        padding = 20,
        
        content = ft.Column([
                        ft.Row([
                            ft.IconButton(icon = ft.icons.HOME, icon_color = "#ffffff", icon_size = 30, on_click=lambda e: ini(e)),
                            ft.Text("Início", color = "#ffffff", size = 15),
                        ]),

                        ft.Row([
                            ft.IconButton(icon = ft.icons.PEOPLE_ALT, icon_color = "#ffffff", icon_size = 30,on_click=lambda e: alu(e)),
                            ft.Text("Alunos", color = "#ffffff", size = 15)
                        ]),

                        ft.Row([
                            ft.IconButton(icon = ft.icons.FAMILY_RESTROOM, icon_color = "#ffffff", icon_size = 30),
                            ft.Text("Responsáveis", color = "#ffffff", size = 15)
                        ]),

                        ft.Row([
                            ft.IconButton(icon = ft.icons.ATTACH_MONEY, icon_color = "#ffffff", icon_size = 30),
                            ft.Text("Financeiro", color = "#ffffff", size = 15)
                        ]),

                        ft.Row([
                            ft.IconButton(icon = ft.icons.SCHOOL_SHARP, icon_color = "#ffffff", icon_size = 30),
                            ft.Text("Turma", color = "#ffffff", size = 15)
                        ]),
                        
                        ft.Row([
                            ft.IconButton(icon = ft.icons.MENU_BOOK, icon_color = "#ffffff", icon_size = 30),
                            ft.Text("Disciplina", color = "#ffffff", size = 15)
                        ]),

                        ft.Container(height = 180),

                        ft.Divider(color = "#ffffff"),

                        ft.Row([
                            ft.IconButton(icon = ft.icons.EXIT_TO_APP_SHARP, icon_color = "#ffffff", icon_size = 30, on_click = lambda e: sair(e)),
                            ft.Text("Sair", color = "#ffffff", size = 15)
                        ])

        ])
    )


    inicio = ft.Row([ft.Container(width = 200, height = 200, padding = 30,bgcolor='#000000')])

    
    alunos = ft.Container(width = 965, height = 620, padding = 20, 
                      content = ft. Container(height=500, width=500,bgcolor='#000000'),
                        )
    
    responsaveis = ft.Container(width = 965, height = 620, padding = 20, 
                      content = ft.Text("Olá, sou o responsal!", color = "#ffffff", size = 15))
    
    
    financeiro = ft.Container(width = 965, height = 620, padding = 20, 
                      content = ft.Text("Faça suas, finanças", color = "#ffffff", size = 15))
    
    
    turma = ft.Container(width = 965, height = 620, padding = 20, 
                      content = ft.Text("Qual sua turma?", color = "#ffffff", size = 15))
    
    disciplinas = ft.Container(width = 965, height = 620, padding = 20, 
                      content = ft.Text("Suas materias são?", color = "#ffffff", size = 15))
    
    def ini(e: ft.ControlEvent):
        page.remove(containermenu)
        page.add(ft.Row([containermenu, inicio]))
        page.update

    def alu(e: ft.ControlEvent):
        page.remove(containermenu)
        page.add(ft.Row([containermenu, alunos]))
        page.update
    

    def respon(e: ft.ControlEvent):
        page.remove(containermenu)
        page.add(ft.Row([containermenu, responsaveis]))
        page.update


    def fin(e: ft.ControlEvent):
        page.remove(containermenu)
        page.add(ft.Row([containermenu, financeiro]))
        page.update


    def tur(e: ft.ControlEvent):
        page.remove(containermenu)
        page.add(ft.Row([containermenu, turma]))
        page.update


    def dic(e: ft.ControlEvent):
        page.remove(containermenu)
        page.add(ft.Row([containermenu, disciplinas]))
        page.update
    
    def sair(e):
        page.window.close()

        page.update(containermenu)

        




    page.add(containermenu)
ft.app(target = main)
