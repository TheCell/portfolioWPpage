function startTheme()
{
    // set obsidian as default theme
    theme = new Theme(
        {
            background:"#22282a",
            f_high:"#f1f2f3",
            f_med:"#ec7600",
            f_low:"#93c763",
            f_inv:"#963a46",
            b_high:"#678cb1",
            b_med:"#6e6d6c",
            b_low:"#42464C",
            b_inv:"#ffcd22"
        });
    theme.install(document.body);
    theme.start();
    // b_med:"#4f6164",
}

document.addEventListener('DOMContentLoaded', function(event)
{
    startTheme();
});