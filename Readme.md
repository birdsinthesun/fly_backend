#Fly Backend

## Troubleshooting

Falls die 3 Theme-Ordner nicht im Backend angezeigt werden nach der Installation muss via Konsole folgender Befehl ausgeführt werden. Damit werden die Symlinks gesetzt:

```cd system/themes && ln -sfn ../../vendor/birdsinthesun/fly_backend/src/Resources/contao/themes/flybackend flybackend && ln -sfn ../../vendor/birdsinthesun/fly_backend/src/Resources/contao/themes/flybackend-tuerkis flybackend-tuerkis && ln -sfn ../../vendor/birdsinthesun/fly_backend/src/Resources/contao/themes/flybackend-dark flybackend-dark```

