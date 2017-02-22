<?if($_GET['kay'] == 'yhtg343242d32ds'){
    //var_dump(exec('git reset --hard'));

    var_dump(exec('git checkout production'));
    var_dump(exec('git add .'));
    var_dump(exec('git commit -m"modified"'));
    var_dump(exec('git push smmycon production'));
    var_dump(exec('git checkout master'));
    var_dump(exec('git pull smmycon master'));
}
