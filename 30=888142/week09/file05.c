/*Program name : file05.c
  Student : 59160668 
  Nitichai Sawangsai
  Section : 04
*/
#include<stdio.h>
int main (int argc,char*argv[])
{
    FILE*myfile;
    char thetext;
    int result;

    myfile = fopen("infile.txt","r");
    result = fscanf(myfile,"%c",thetext);
    while(result!=EOF) 
    {
      fprintf(stdout,"%c",thetext);
      result = fscanf(myfile,"%c",&thetext);
    }//while(result!=EOF)
    fclose(myfile);
return 0;
}//main
