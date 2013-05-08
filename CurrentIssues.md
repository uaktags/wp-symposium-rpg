WP-Symposium-RPG
================

No new development would be complete without some list of things not working.

Current as of: 05/08/2013 12:12AM EST

Currently we have the following to fix:

[x] $bonus = get_option().... seems to return "1" for 'new_thread" but nothing for other arguments (FIXED: Forgot "break;" after switches)

[x] $bonus = get_option().... returning "1" is also a problem as "1" may not be the value it's set to return (FIXED: Forgot "break;" after switches)

[x] Install feature isn't created to add 'hp' to 'symposium_usermeta' db

[x] Plugin requires hardwiring into WPS scripts...are there hooks in place already we could use? (Fixed: Using hooks that were made for CubePoints to integrate)

[x] WPS is already compatiable with CubePoints....could we integrate with it? (Fixed: We use the same actions CubePoints uses)

[ ] Attack system needs to be Ajax'd and display a fading message of "Victory" or "Defeat" and then update the stats
