#!/bin/bash

RED_COLOR=$'\033[31;1m'
DEFAULT_COLOR=$'\033[0m'
ip=$(hostname -i)

function Generate_Hosts_Lines
{
 for domain in $(uapi --user="$user" DomainInfo list_domains | grep 'main_domain\|-' | awk '{print$2}' | sed '/^[[:space:]]*$/d' | tr -d \"); do

  echo "$ip" "$domain" www."$domain"

 done
}


if [  "$(whoami)" = 'root' ]; then

 while (true); do

  read -e -r -p $'\e[36mType cPanel Username or "all" for all users on the server:\e[0m ' user;

  if [ -z "$user" ]; then

   printf "%sNo User Specified!%s\\n" "$RED_COLOR" "$DEFAULT_COLOR"
   continue

  fi 

  if [  "$user" = all ]; then

   for user in $(whmapi1 listaccts | grep 'user:' | awk '{print$2}'); do 

    Generate_Hosts_Lines

   done
  
   break
 
  else
   
   if [ -n "$(whmapi1 listaccts search="$user" searchtype=user | grep 'user:' | awk '{print$1}')" ]; then

   Generate_Hosts_Lines
   break

   else

    printf "%sInvalid Username!%s\\n" "$RED_COLOR" "$DEFAULT_COLOR"
 
   fi
  fi
 done

else

 for domain in $(uapi DomainInfo list_domains | grep 'main_domain\|-' | awk '{print$2}' | sed '/^[[:space:]]*$/d' | tr -d \"); do

  echo "$ip" "$domain" www."$domain"

  done

fi
