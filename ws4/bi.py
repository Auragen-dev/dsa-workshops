import csv
with open ('quotes.csv', 'r') as customers:
    customerReader = csv.reader(customers)

    for line in customerReader:
        print(line[5])