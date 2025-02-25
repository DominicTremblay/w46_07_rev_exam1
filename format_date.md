## 🎨 Formatage de la Date avec `format()`

| Format | Code PHP | Résultat |
|--------|---------|----------|
| **Année complète (YYYY)** | `$date->format("Y")` | `2025` |
| **Année sur 2 chiffres (YY)** | `$date->format("y")` | `25` |
| **Mois en chiffre (01-12)** | `$date->format("m")` | `02` |
| **Mois sans zéro (1-12)** | `$date->format("n")` | `2` |
| **Nom du mois abrégé** | `$date->format("M")` | `Feb` |
| **Nom du mois complet** | `$date->format("F")` | `February` |
| **Jour du mois avec zéro (01-31)** | `$date->format("d")` | `24` |
| **Jour du mois sans zéro (1-31)** | `$date->format("j")` | `24` |
| **Jour de la semaine abrégé** | `$date->format("D")` | `Mon` |
| **Jour de la semaine complet** | `$date->format("l")` | `Monday` |
| **Numéro du jour de la semaine (0=Dimanche, 6=Samedi)** | `$date->format("w")` | `1` |
| **Numéro de la semaine dans l'année (01-53)** | `$date->format("W")` | `08` |
| **Jour de l'année (001-366)** | `$date->format("z")` | `54` |
| **Heure (24h) avec zéro (00-23)** | `$date->format("H")` | `14` |
| **Heure (12h) avec zéro (01-12)** | `$date->format("h")` | `02` |
| **Minute (00-59)** | `$date->format("i")` | `30` |
| **Seconde (00-59)** | `$date->format("s")` | `45` |
| **AM / PM** | `$date->format("A")` | `PM` |
| **Fuseau horaire** | `$date->format("e")` | `UTC` |

---

## 🔄 **Formats Complets Courants**
| Format | Code PHP | Résultat |
|--------|---------|----------|
| **Format Européen** | `$date->format("d/m/Y")` | `24/02/2025` |
| **Format ISO 8601** | `$date->format("Y-m-d\TH:i:sP")` | `2025-02-24T14:30:45+00:00` |
| **Format SQL** | `$date->format("Y-m-d H:i:s")` | `2025-02-24 14:30:45` |
| **Format Littéral** | `$date->format("l j F Y")` | `Lundi 24 Février 2025` |
| **Format Américain** | `$date->format("m/d/Y")` | `02/24/2025` |
