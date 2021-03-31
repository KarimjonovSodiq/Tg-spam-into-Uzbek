from telethon.sync import TelegramClient, events

#KarimjonovSodiq TG:@Sodiqjon_Karimjonov
print("'TG - spam' - Skript KarimjonovSodiq tomonidan tuzildi,Telegram akkauntlariga spam habar yuborish uchun. \n Savol va takliflar uchun TG: @Sodiqjon_Karimjonov")
print()
hashtg = input("Akkaunt xash-id sini kiriting: ")
iptg = int(input("Dastur ip sini kiriting: "))
px = int(input("Habarlar soni: "))
idp = input("Foydalanuvchi id sini kiriting: ")
mes = input("Habarni kiriting: ")

api_id = iptg
api_hash = hashtg

with TelegramClient('proxy', api_id, api_hash) as client:
	for i in range(px):
		client.send_message(idp, mes)
		client.send_message(idp, mes)
		client.send_message(idp, mes)
		client.send_message(idp, mes)
		client.send_message(idp, mes)
		client.send_message(idp, mes)
		client.send_message(idp, mes)
		
#KarimjonovSodiq TG:@Sodiqjon_Karimjonov
