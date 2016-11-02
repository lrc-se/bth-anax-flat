---
titleBreadcrumb: Typografi
...

Typografiska element
====================

På denna sida finns ett antal olika element för att exemplifiera webbplatsens typografiska stilsättning, 
med särskilt fokus på det horisontella rutnät som visas i bakgrunden när muspekaren befinner sig över innehållsytan.


Underrubrik
-----------

Ja, det här är alltså ett nytt stycke med en underrubrik av typen `h2`. Notera att såväl rubriken som stycket matchar rutnätet i bakgrunden. 
Här kommer lite mer text för att göra stycket längre, så att vi får fler rader och anpassningen tydligare framgår. 
Text är trevligt. Tycker inte du det? Det tycker jag. Så därför tänker jag inte sluta skriva *riktigt* än, så det så. Men kanske snart. Vem vet? Inte du, inte jag. Inte Lisa.

Nämen titta, nu blev det ett nytt stycke också. Så roligt! Det här stycket blir dock lite kortare än det förra -- man kan ju inte mala på i all evighet, inte sant? 
Fast en liten stund till skall nog gå bra. Tror jag...

### Ytterligare en underrubrik

Här har vi en punktlista:

* Ägg
* Mjölk
* Socker
* Koftor
* Betongborr
* Stearinljus
* Bok om medeltida byggnadskonst

#### Instruktioner på jordnötspåse

1. Öppna påsen
2. Ät innehållet


Ny avdelning
------------

Jaha, då var det en ny avdelning då. Vad skall vi göra här? Tja, vad sägs om lite text i <small>olika storlekar</small>? Storsjön innehåller 8,02 km<sup>3</sup> H<sub>2</sub>O. 
Plus ett **odjur**!

Här är ett citat också:

> You see things; and you say 'Why?'<br>
> But I dream things that never were; and I say 'Why not?'

Han har sagt mycket, den där [Shawsnubben](https://en.wikipedia.org/wiki/George_Bernard_Shaw).


## Rubriknivå 2
### Rubriknivå 3
#### Rubriknivå 4
##### Rubriknivå 5
###### Rubriknivå 6

Titta, det funkar!!


Sista avdelningen
-----------------

Jo, jag lovar! Kanske. Vi får se. Här tänkte jag i alla fall visa en annan typ av lista, nämligen en s.k. definitionslista. Titta bara:

##### Definitioner

PHP
: Serversidesspråk för webben

JavaScript
: Klientsidesspråk för webben

SQL
: Frågespråk för databaser

~~~
/* PHP */
echo (isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '');

// JS
var btn = document.getElementById("button1");
btn.addEventListener("click", function(e) {
    e.target.style.display = "none";
});

-- SQL
SELECT o.* FROM Order o
    JOIN OrderLine ol ON o.id = ol.orderId
    JOIN Customer c ON ol.custId = c.id
WHERE c.id = ?
ORDER BY o.orderDate DESC;
~~~

---

...och så ett par tabeller när vi ändå håller på:

| Vara | Pris |
| ---- | ---- |
| Ägg  | 20 kr |
| Mjölk | 10 kr |
| Socker | Fem miljoner kr |

<div class="table" markdown="1">
| Vara | Pris |
| ---- | ---- |
| Koftor  | 350 kr |
| Betongborr | 1799 kr |
| Stearinljus | Gratis |
| Bok om medeltida byggnadskonst | *Snälla, ta den bara!* |
</div>

###### Avslutning

Ja, det var väl ungefär allt jag hade att bjuda på idag. Det blev ändå rätt bra, eller hur? Fast det är klart, det är kanske mer text än faktiskt *innehåll*, 
men innehållet är å andra sidan inte särskilt viktigt här. Samtidigt blir det lite mer livat om det inte bara är "lorem ipsum"-text överallt -- det tycker i alla fall jag. 
Så därför fick det bli så här. YMMV.

___Hej då!___


*[YMMV]: Your Mileage May Vary ("du kanske inte håller med")
