2020-01-21T01-12-29: LogOut_File: : logfile started
2020-01-21T01-12-29: Net Status: low-level initialize success.
2020-01-21T01-12-29: Note: this version (1/29/2017) has new data fields added
2020-01-21T01-12-29: time = time since start of game in ms.
2020-01-21T01-12-29: address = address of IP address
2020-01-21T01-12-29: incoming = total size of messages set to me in bytes. Spikes can indicate lag.
2020-01-21T01-12-29: outgoing = total size of messages set from me in bytes. Spikes can indicate lag.
2020-01-21T01-12-29: app_ctos = client to server bytes delta excluding overheads (app data only)
2020-01-21T01-12-29: app_stoc = server to client bytes delta excluding overheads (app data only)
2020-01-21T01-12-29: loss = number of packets lost. Can indicate lags.  Some node on the network is dropping packets or taking to long and we have to resend them.
2020-01-21T01-12-29: sent = number of packets sent. Spikes can indicate lag.
2020-01-21T01-12-29: ping = how long it takes for a packet to get back and forth. Spikes can indicate lag.
2020-01-21T01-12-29: variance = how much the ping is changing from avg ping. Spikes can indicate lag.
2020-01-21T01-12-29: reliable delayed = This occurs when we drop reliable packets from sending this frame because we are sending to much data. Unreliable are more likely to be dropped than reliable.
2020-01-21T01-12-29: unreliable delayed = This occurs when we drop unreliable packets from sending this frame because we are sending to much data.
2020-01-21T01-12-29: app update delayed = This occurs when the app is taking to long to run code caused by network packets (ie CPU) and packets are delayed until the next frame
2020-01-21T01-12-29: Time spent in critical section (frame) = This is the time the network thread is blocking the main thread from doing anything.
2020-01-21T01-12-29: Latency in Window = The average Latency in ms. of Reliable packets during this time slice
2020-01-21T01-12-29: Packet Loss percentage in Window = The packet loss percentage of Reliable packets during this time slice
2020-01-21T01-12-29: Jitter in Window = The average Jitter in ms. of Reliable packets during this time slice
2020-01-21T01-12-29: Overall Latency Min = The lowest Latency seen in ms. of Reliable packets up to this point in time
2020-01-21T01