- Nastavenie Laravelu

- Pridanie packagu laracasts / Laravel-5-Generators-Extended pre pracovanie s migration a tables

- Vytvorenie tabuliek tasks, status a pivot tabulky task status

- Vytvorenie fake udajov vo factories + vytvorenie modelov

-Vytvorenie Controllera

- Vytvorenie route task s resources

- Opravenie chyby v RouteServiceProvider pridal som ->namespace('App\Http\Controllers') , pretoze hlasilo ze chyba Controller pritom je vytvoreny

- Premenovanie welcome.blade.php na template.blade.php pridanie yieldov do title a contentu

- Vytvorenie suboru index.blade.php pre hlavny content 

- V web.php som pridal do hlavicky cestu use App\Models\Tasks
    Taktiez do TaskControllera. Je to dobre aj na skratene zapisy.

- Pre vytiahnutie dat z databasy som v TaskController do funkcii index vytvoril premennu $task = Tasks::all(); return $task; vytiahne to data v json.

- Ked chcem to hodit do indexu prepojim to s with return view('task.index')->with('task', $task);

- V index.blade.php si to vytiahnem pomocou foreach a vlozim kam potrebujem <h1>->{{tittle}}  <p>->{{description}}

- Vytvorenie suboru show.blade.php kde zobrazi urcity task

- Controller funkcia show vytvorenie premennej $taskes = Tasks::findOrFai($id);
znovu to co som pouzil vo funkcii index return view('task.show')->with('task',$taskes);

-







