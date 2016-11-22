Laddningstid och användbarhet
=============================

Här analyseras laddningstid och användbarhet för fyra olika webbplatser baserat på deras resultat med [Google PageSpeed Insights](https://developers.google.com/speed/pagespeed/). 
Laddningstiden som redovisas är tidpunkten då respektive sidas samtliga *egna* resurser laddats färdigt, då det är denna som avgör när sidan kan renderas och interageras med fullt ut, 
och inkluderar inte därpå följande asynkrona anrop. Detta motsvaras av händelsen `onload` i JavaScript samt den röda linjen i Chromes nätverksverktyg, 
vilket är det som använts för att få fram siffrorna här.


Observera även att värdena för samtliga mätpunkter som redovisas här kan variera över tid eftersom de individuella sidorna ofta inte är statiska -- 
liksom på grund av tillfälliga toppar och dalar i nätverkstrafiken -- men nedanstående värden var de som gällde när jag utförde mätningarna.

<p class="notice" markdown="1">
    *__OBS:__ Jag har utfört denna uppgift på egen hand och har därför inga övriga grupp&shy;medlemmar att redovisa.*
</p>


Blekinge Tekniska Högskola      {.section-heading}
--------------------------

BTH är lärosätet som håller i den utbildning som denna kurs ingår i och dess webbplats borde därmed vara bekant för alla som läser detta.


### Startsida   {.subsection-heading}

<http://www.bth.se/>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 50/100 |
| Mobile UX      | 99/100 |
| Desktop Speed  | 57/100 |
| Laddningstid   | 3,43 s |
| Antal resurser | 96 st  |
| Total storlek  | 2,0 MB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Enable compression
* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Optimize images
* Minify JavaScript
* Leverage browser caching
* Reduce server response time
* Minify CSS
* Size tap targets appropriately *(endast för mobil)*


### Programsida     {.subsection-heading}

<http://www.bth.se/distansutbildningar/webbprogrammering/>

<div class="table" markdown="1">
| Mätpunkt       | Värde   |
|----------------|---------|
| Mobile Speed   | 41/100  |
| Mobile UX      | 100/100 |
| Desktop Speed  | 50/100  |
| Laddningstid   | 2,12 s  |
| Antal resurser | 60 st   |
| Total storlek  | 1,3 MB  |
</div>

PageSpeed ger följande åtgärdsförslag:

* Enable compression
* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Optimize images
* Reduce server response time
* Minify JavaScript
* Leverage browser caching
* Minify CSS
* Prioritize visible content *(endast för mobil)*


### Studentportalen     {.subsection-heading}

<https://studentportal.bth.se/web/studentportal.nsf/web.xsp/>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 56/100 |
| Mobile UX      | 62/100 |
| Desktop Speed  | 71/100 |
| Laddningstid   | 3,73 s |
| Antal resurser | 93 st  |
| Total storlek  | 614 kB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Leverage browser caching
* Optimize images
* Enable compression
* Reduce server response time
* Minify CSS
* Minify JavaScript
* Use legible font size *(endast för mobil)*
* Size tap targets appropriately *(endast för mobil)*
* Configure the viewport *(endast för mobil)*
* Size content to viewport *(endast för mobil)*


### Utvärdering

De tydligaste åtgärderna som BTH bör överväga är att slå på komprimering för alla resurser och slå ihop så många som möjligt av skript- och stilfilerna för att minska antalet anrop -- 
bådadera ger just nu en betydande ökning i såväl storlek som väntetid -- och bild&shy;resurserna kan även komprimeras hårdare, särskilt de stora. 
Student&shy;portalen är dessutom inte mobil&shy;anpassad över huvud taget, vilket är anledningen till det dåliga betyget för den sidan, 
och att hänvisa till en app med begränsad funktionalitet visar på en tveksam användning av utvecklings&shy;resurser som förmodligen istället borde lagts på att skapa en responsiv layout.


Scandinavia and the World   {.section-heading}
-------------------------

SatW är en webbserie som handlar om de skandinaviska/nordiska folken och deras förhållande till både varandra och övriga världen. 
Varje land representeras av en karaktär som uppvisar vissa stereotypa utseenden och beteenden för just det landet och mycket av humorn bygger på kultur&shy;krockar och överraskande nationella särarter.


### Startsida   {.subsection-heading}

<http://satwcomic.com/>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 70/100 |
| Mobile UX      | 99/100 |
| Desktop Speed  | 71/100 |
| Laddningstid   | 8,32 s |
| Antal resurser | 175 st |
| Total storlek  | 1,0 MB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Optimize images
* Leverage browser caching
* Enable compression
* Minify HTML
* Size tap targets appropriately *(endast för mobil)*
* Minify JavaScript *(endast för skrivbord)*


### Seriestripp     {.subsection-heading}

<http://satwcomic.com/makeover-of-2016>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 70/100 |
| Mobile UX      | 99/100 |
| Desktop Speed  | 71/100 |
| Laddningstid   | 7,55 s |
| Antal resurser | 187 st |
| Total storlek  | 1,6 MB |
</div>

PageSpeed ger samma förslag som för startsidan ovan.


### Diskussionsforum    {.subsection-heading}

<http://satwcomic.com/forums>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 70/100 |
| Mobile UX      | 95/100 |
| Desktop Speed  | 75/100 |
| Laddningstid   | 5,68 s |
| Antal resurser | 59 st  |
| Total storlek  | 369 kB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Reduce server response time
* Leverage browser caching
* Optimize images
* Enable compression
* Minify HTML
* Size content to viewport *(endast för mobil)*
* Size tap targets appropriately *(endast för mobil)*
* Prioritize visible content *(endast för skrivbord)*
* Minify JavaScript *(endast för skrivbord)*


### Utvärdering

SatW skulle kunna tjäna en del poäng på att dels slå ihop sina stilmallar till en och dels ändra laddningen av ett annonsskript till asynkron så det inte blockerar renderingen av sidan. 
Det finns även vissa resurser som nu laddas in från andra ställen som de skulle kunna lägga på sin egen server för att ha större kontroll över cachning o.dyl. 
och flera av bild&shy;resurserna skulle kunna komprimeras mer -- och eftersom det ofta rör sig om teckningar är det förvånande att många av dem sparats som JPEG istället för PNG.


Slashdot    {.section-heading}
--------

Slashdot (__/.__) är en klassisk nyhets&shy;webbplats för tekniska nyheter och har *"News for nerds, stuff that matters"* som sin slogan.


### Startsida   {.subsection-heading}

<http://slashdot.org/>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 50/100 |
| Mobile UX      | 98/100 |
| Desktop Speed  | 74/100 |
| Laddningstid   | 5,44 s |
| Antal resurser | 152 st |
| Total storlek  | 643 kB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Prioritize visible content
* Optimize images
* Leverage browser caching
* Enable compression
* Minify JavaScript
* Minify HTML
* Avoid landing page redirects *(endast för mobil)*
* Size tap targets appropriately *(endast för mobil)*
* Minify CSS *(endast för skrivbord)*


### Artikelsida     {.subsection-heading}

[https://tech.slashdot.org/story/<wbr>16/11/09/2315214/<wbr>silicon-valley-investors-call-for-california-to-secede-from-the-us-after-trump-win](https://tech.slashdot.org/story/16/11/09/2315214/silicon-valley-investors-call-for-california-to-secede-from-the-us-after-trump-win)

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 60/100 |
| Mobile UX      | 99/100 |
| Desktop Speed  | 72/100 |
| Laddningstid   | 4,28 s |
| Antal resurser | 101 st |
| Total storlek  | 609 kB |
</div>

PageSpeed ger samma förslag som för startsidan, utom "Avoid landing page redirects" för mobil som inte längre uppträder här.


### Omröstningar    {.subsection-heading}

<http://slashdot.org/polls>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 63/100 |
| Mobile UX      | 99/100 |
| Desktop Speed  | 77/100 |
| Laddningstid   | 2,35 s |
| Antal resurser | 68 st  |
| Total storlek  | 666 kB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Prioritize visible content
* Optimize images
* Leverage browser caching
* Enable compression
* Minify JavaScript
* Minify HTML
* Size tap targets appropriately *(endast för mobil)*
* Reduce server response time *(endast för skrivbord)*
* Minify CSS *(endast för skrivbord)*


### Utvärdering

Slashdot får tydliga poäng&shy;avdrag för sin dubbla omdirigering på startsidan för mobil (HTTP &rarr; HTTPS &rarr; *m.*) och har även flera blockerande skript&shy;resurser som borde kunna slås ihop 
och/<wbr>eller laddas asynkront. Precis som för de andra webbplatserna finns även utrymme för att optimera flera av bilderna, vilket kan utgöra en betydande besparing räknat i procent, 
liksom att inkludera tecken&shy;snitts&shy;definitioner lokalt istället för att ladda in dem från Google varje gång.


IMDb    {.section-heading}
----

IMDb, Internet Movie Database, är en riktig långkörare på nätet och används flitigt av många som på ett eller annat sätt är intresserade av eller håller på med film.


### Startsida   {.subsection-heading}

<http://www.imdb.com/>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 57/100 |
| Mobile UX      | 98/100 |
| Desktop Speed  | 71/100 |
| Laddningstid   | 2,72 s |
| Antal resurser | 186 st |
| Total storlek  | 2,1 MB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Leverage browser caching
* Reduce server response time
* Size tap targets appropriately *(endast för mobil)*
* Optimize images *(endast för skrivbord)*


### Filmsida    {.subsection-heading}

<http://www.imdb.com/title/tt0371724/>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 61/100 |
| Mobile UX      | 97/100 |
| Desktop Speed  | 72/100 |
| Laddningstid   | 2,92 s |
| Antal resurser | 118 st |
| Total storlek  | 851 kB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Leverage browser caching
* Reduce server response time
* Minify HTML
* Optimize images
* Size tap targets appropriately *(endast för mobil)*


### Skådespelarsida     {.subsection-heading}

<http://www.imdb.com/name/nm0001772/>

<div class="table" markdown="1">
| Mätpunkt       | Värde  |
|----------------|--------|
| Mobile Speed   | 66/100 |
| Mobile UX      | 97/100 |
| Desktop Speed  | 72/100 |
| Laddningstid   | 2,91 s |
| Antal resurser | 121 st |
| Total storlek  | 819 kB |
</div>

PageSpeed ger följande åtgärdsförslag:

* Eliminate render-blocking JavaScript and CSS in above-the-fold content
* Leverage browser caching
* Reduce server response time
* Size tap targets appropriately *(endast för mobil)*
* Optimize images *(endast för skrivbord)*
* Prioritize visible content *(endast för skrivbord)*


### Utvärdering

Även IMDb har vinster att hämta på att kombinera sina skript- och stilresurser för att minska antalet anrop och 
borde kunna utöva lite påtryckningar på moder&shy;företaget Amazon att hantera cachning bättre för de många externa resurserna. 
Serverns svarstid är också lite väl lång, men det kanske är att vänta för en så pass populär webbplats.


Sammanfattning
--------------

Gemensamt för alla webbplatserna är att den största förbättrings&shy;potentialen ligger i hanterandet av skript och stilmallar, även om det finns praktiska gränser för vad som är rimligt att göra där 
(se även [kurs&shy;momentets redovisnings&shy;text](report/kmom05) för en utförligare diskussion om detta), samt ifråga om bildkvalitet och server&shy;inställningar.

En annan återkommande sak är dock att det ofta är externa resurser som "bryter" mot "reglerna" och det kan därmed vara svårt att så att säga nå hela vägen fram -- 
och det är lite ironiskt att det ofta är Googles egna tjänster som uppträder som bovar i de samman&shy;fattningarna... Samtliga webbplatser får även anmärkningar på saknad minifiering, 
men detta rör sig i regel inte om så stor påverkan i slutändan och eventuella åtgärder bör i första hand koncentreras till andra områden där de potentiella vinsterna ofta är flera storleks&shy;ordningar större.

Slutligen påpekas att de allra flesta sidorna har vissa klickbara ytor som är lite små i mobilläge, 
men om vi bortser från BTH:s studentportal är detta också den enda anmärkningen på använd&shy;barhets&shy;fronten där, med annars genomgående höga betyg.


### Laddningstid

Jag upplever för det mesta en laddningstid på max **3 sekunder** som tillfreds&shy;ställande och allt över **5 sekunder** som märkbart långsamt. 
För beteckningen "snabb" vill jag helst komma ner under **2 sekunder**. I mitt test är det ingen sida som klarar den lägsta gränsen, medan det är flera 
(alla SatW-sidor och Slashdots startsida) som överskrider den högsta. Bland de övriga ligger många mellan 2 och 3 sekunder, så överlag är det OK ur hastighets&shy;synpunkt.
