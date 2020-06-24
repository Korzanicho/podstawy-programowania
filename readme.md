Przed uruchomieniem projektu komenda aby zainstalować potrzebne zależności: npm install
Aby poprawnie uruchomić projekt najlepiej użyć polecenia: gulp serve
Jeżeli style oraz menu nie wyświetlają się poprawnie oznacza to, że pliki nie są w głównym pniu serwera.
W takiej sytuacji należy zmodyfikować plik header.php w którym znajdują się linki do odnośników i styli
np.:
tam gdzie: 	<li><a href="<?=$_SERVER['HTTP_HOST']?>/Tasks/zad1/view.php">Zadanie 1</a></li>
zmienić na: 	<li><a href="<?=$_SERVER['HTTP_HOST']?>NAZWA-FOLDERU/Tasks/zad1/view.php">Zadanie 1</a></li>

Autor: Adrian Korzan 6900