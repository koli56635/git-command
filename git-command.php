git git command:


echo "# pcc_pas" >> README.md
git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/TSRHealth/pcc_pas.git
git push -u origin main

git branch -m "old_branch"  "new_branch"    ==> branch name change 
git checkout "branch-name"   ==> branch switch

### delete a branch for remote ###
git push origin --delete "old-name"     ==> delete branch
git push --set-upstream origin

### rename a  branch for remote ###
git push origin --delete "old-name"     ==> delete branch
git push origin -u new-name       ==> select new branch name
git push --set-upstream origin "new branch name"   


###new branch create####
git checkout -b 'new-branch'
git branch -a
git add .
git commit -m "Git push a local branch upstream to a remote GitHub repo."
git push --set-upstream origin 'new-branch'



#### two branch marge ###:
git checkout update-1
git merge update-2
git merge --continue  (After resolving conflicts, you can continue the merge with:)
Or you can use git merge --abort to cancel the merge if needed.
git commit -m "Merge update-2 into update-1"
git push origin update-1