x="Fxg tm lhfx mbfx tkx ftlmxkl hy maxbk ytmxl: Max ytnem, wxtk Uknmnl, bl ghm bg hnk lmtkl, unm bg hnklxeoxl, matm px tkx ngwxkebgzl.Max dxr mh max gxqm exoxe bl max dxr hy max vbiaxk."
for i in range(26):
    s=""
    print i
    for j in x:
        if j == " ":
            s+=j
        else:
            s+="%s" % chr(ord('a')+(ord(j)-ord('a')+i)%26)
    print s
