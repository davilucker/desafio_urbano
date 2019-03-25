import csv
import requests

def processo( pasta, comarca, uf ):
   print("pasta =>"+pasta)
   print("comarca =>"+comarca)
   print("uf =>"+uf)
   request = requests.get('https://www.minhaurl.com.br/webservices_app_urbano/ws_processos.php?metodo=inserir_processo&pasta='+pasta+'&comarca='+comarca+'&uf='+uf, auth=('user', 'pass'))
   print(request.text)
   print("=====================================================")

pular_titulo = 0
with open('processos.csv', 'r') as processos:
    linhas = csv.reader(processos)
    for linha in linhas:
       if pular_titulo >= 1:
           linha_aux = linha[0].split(';')
           processo(linha_aux[0], linha_aux[1], linha_aux[2]) 
       pular_titulo += 1
        
