import ftplib
import os
import sys
import re

# Custom EPSV parser for servers that misbehave with PASV under IPv4
def custom_makepasv(session):
    resp = session.sendcmd('EPSV')
    # Parse 229 Entering Extended Passive Mode (|||port|)
    match = re.search(r'\(\|\|\|(\d+)\|\)', resp)
    if not match:
        raise Exception(f"Could not parse EPSV response: {resp}")
    port = int(match.group(1))
    host = session.sock.getpeername()[0]
    return host, port

def main():
    host = "ftpupload.net"
    user = "if0_42703439"
    
    # Read password from args or input
    if len(sys.argv) > 1:
        password = sys.argv[1]
    else:
        password = input("Enter your InfinityFree FTP Password: ")

    try:
        print(f"Connecting to {host} via FTP...")
        session = ftplib.FTP(host, user, password)
        
        # Override the makepasv method to force EPSV support
        session.makepasv = lambda: custom_makepasv(session)
        
        # Change directory to htdocs
        print("Navigating to htdocs directory...")
        session.cwd("htdocs")

        # Upload files
        files_to_upload = ["index.php", "mypic.png", "avatar.jpg"]
        for filename in files_to_upload:
            if os.path.exists(filename):
                print(f"Uploading {filename}...")
                with open(filename, "rb") as file:
                    session.storbinary(f"STOR {filename}", file)
                print(f"Uploaded {filename} successfully.")
            else:
                print(f"Error: {filename} not found locally.")

        session.quit()
        print("\nDeployment completed successfully! Your site is live at:")
        print("http://ain0otxs.infinityfree.com/")
    except Exception as e:
        print(f"\nError during deployment: {e}")

if __name__ == "__main__":
    main()
