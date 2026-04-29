bash -c 'h=$(date +%H);
g="Good night";
[ "$h" -lt 22 ] && g="Good evening";
[ "$h" -lt 18 ] && g="Good afternoon";
[ "$h" -lt 12 ] && g="Good morning";
zenity --question \
--title="Power Off" \
--text="$g, Pramod.\n\nReady to sign off?" \
--ok-label="Power Off" \
--cancel-label="Cancel" \
--default-cancel \
&& systemctl poweroff'
