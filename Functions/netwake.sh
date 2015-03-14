# Attempts to background ping to default wlan gateway to keep WLAN device from sleeping
# Other attempts to turn off power management for WLAN appear unsuccessful. Even this script is questionable.
# Appears to be an issue with driver support on RasPis. USB ports seem to have enough power
# This is the best option for an attempted fix I can come up with.
echo "Pinging default gateway to keep wireless lan alive. CTRL+C to exit, or exit terminal"
echo "YOU CAN MIMINIZE THIS WINDOW AND LET IT RUN"
gw="$(ip route show 0.0.0.0/0 dev wlan0 | cut -d\  -f3)"
ping ${gw}